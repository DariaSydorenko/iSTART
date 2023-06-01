<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = $request->all();

        // Отримую поточний стан кошика з кук
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // Додаю товар до кошика
        $cart[] = $product;

        // Отримую ідентифікатори товарів з кошика
        $productIds = array_column($cart, 'phone_id');

        // Отримую повну інформацію про товари з використанням їх ідентифікаторів
        $products = Phone::with('model', 'color')->whereIn('phone_id', $productIds)->get();

        // Перетворюю колекцію товарів у асоціативний масив, індексований за phone_id
        $products = $products->keyBy('phone_id')->toArray();

        // Замінюю ідентифікатори кольору та моделі на їх назви
        foreach ($cart as &$item) {
            $productId = $item['phone_id'];
            $item['model'] = $products[$productId]['model'];
            $item['color'] = $products[$productId]['color'];
        }

        // Зберігаю оновлений кошик у куці
        return redirect()->back()->withCookie('cart', json_encode($cart));
    }

    public function remove(Request $request)
    {
        // Отримую унікальний ідентифікатор товару, який потрібно видалити
        $phoneId = $request->input('phone_id');

        // Отримую поточний стан кошика з кук
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // Знаходжу індекс товару в кошику за його унікальним ідентифікатором
        $index = array_search($phoneId, array_column($cart, 'phone_id'));

        // Видаляю товар з кошика за індексом
        if ($index !== false) {
            unset($cart[$index]);
            $cart = array_values($cart); // Переіндексовую масив
        }

        // Зберігаю оновлений кошик у куці
        return redirect()->back()->withCookie('cart', json_encode($cart));
    }

    public function getTotalPrice($cart)
    {
        $productIds = array_column($cart, 'phone_id');

        $totalPrice = Phone::whereIn('phone_id', $productIds)->sum('price');

        return $totalPrice;
    }

    public function show(Request $request)
    {
        $cart = json_decode($request->cookie('cart'), true) ?? [];

        // Отримати повну інформацію про товари з використанням їх ідентифікаторів
        $productIds = array_column($cart, 'phone_id');
        $products = Phone::whereIn('phone_id', $productIds)->get()->keyBy('phone_id');

        // Отримати загальну суму цін за всі товари у кошику
        $totalPrice = $this->getTotalPrice($cart);

        return view('cart', compact('cart', 'products', 'totalPrice'));
    }
}
