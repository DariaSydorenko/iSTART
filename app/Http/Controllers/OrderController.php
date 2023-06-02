<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use App\Models\Hit;
use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
use App\Models\Order;
use App\Models\QuickOrder;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;

class OrderController extends Controller
{
    public function quickBuy(Request $request)
    {
        return view('quick_buy');
    }

    public function quickStore(Request $request)
    {
        $phone = $request->input('phone');
        $order = new QuickOrder();
        $order->phone = $phone;
        $order->save();
        return redirect()->route('quick_success')->with('success', 'Замовлення оформлено успішно!');
    }

    public function show(Request $request) {
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // Отримання повної інформації про товари з використанням їх ідентифікаторів
        $productIds = array_column($cart, 'phone_id');
        $products = Phone::whereIn('phone_id', $productIds)->get()->keyBy('phone_id');

        // Створення екземпляру CartController
        $cartController = new CartController();
        // Отримання загальної суми цін за всі товари у кошику
        $totalPrice = $cartController->getTotalPrice($cart);

        return view('order', compact('cart', 'products', 'totalPrice'));
    }

    public function success()
    {
        $hits = Hit::with('model', 'color')->get();
        $discounts = Discount::with('model', 'color')->get();

        return view('success', compact('hits', 'discounts'));
    }

    public function clear()
    {
        // Видалення кукі з кошиком
        return redirect()->back()->withCookie(Cookie::forget('cart'));
    }

    public function remove(Request $request)
    {
        // Отримання унікального ідентифікатору товару, який потрібно видалити
        $phoneId = $request->input('phone_id');

        // Отримання поточного стану кошика з кукі
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // Знаходження індекса товару в кошику за його унікальним ідентифікатором
        $index = array_search($phoneId, array_column($cart, 'phone_id'));

        // Видалення товару з кошика за індексом
        if ($index !== false) {
            unset($cart[$index]);
            $cart = array_values($cart); // Переіндексовую масив
        }

        // Зберігання оновленого кошика у кукі
        return redirect()->back()->withCookie('cart', json_encode($cart));
    }

    public function store(Request $request)
    {
        $cart = json_decode($request->cookie('cart', '[]'), true) ?? [];

        // Отримання даних з форми
        $name = $request->input('name');
        $surname = $request->input('surname');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $delivery = $request->input('delivery');
        $city = $request->input('city');
        $payment = $request->input('payment');
        $telegram = $request->has('telegram');
        $comment = $request->input('comment');
        $request->cookie('cart', '[]');

        // Збереження користувача
        $user = new User();
        $user->name = $name;
        $user->surname = $surname;
        $user->phone = $phone;
        $user->email = $email;
        $user->save();

        // Збереження замовлення
        foreach ($cart as $item) {
            $order = new Order();
            $order->user_id = $user->id;
            $order->phone_id = $item['phone_id'];
            $order->delivery = $delivery;
            $order->city = $city;
            $order->payment = $payment;
            $order->telegram = $telegram;
            $order->comment = $comment;
            $order->save();
        }

        return redirect()->route('order_success')->withCookie(Cookie::forget('cart'))->with('success', 'Форма успішно відправлена');
    }
}
