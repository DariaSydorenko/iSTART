@extends('app')

@section('content')
    <div class="wrapper">
        <div class="title">
            <h1 class="title-text">Оформлення замовлення</h1>
        </div>
    </div>
    <form action="{{ route('order.store') }}" method="POST">
        @csrf
        <div class="container_ord">
            <div class="wrapper">
                <div class="reg">
                    <h2 class="reg-title">Контактна інформація</h2>
                    <div class="reg-line">
                        <input class="reg-line-input" type="text" id="name" name="name" required placeholder="* Ім'я" style="padding-left: 10px;">
                    </div>
                    <div class="reg-line">
                        <input class="reg-line-input" type="text" id="surname" name="surname" required placeholder="* Прізвище" style="padding-left: 10px;">
                    </div>
                    <div class="reg-line">
                        <input class="reg-line-input" type="text" id="phone" name="phone" required placeholder="* Телефон: +38(___)-___-__-__" pattern="\+38\([0-9]{3}\)-[0-9]{3}-[0-9]{2}-[0-9]{2}" style="padding-left: 10px;">
                    </div>
                    <div class="reg-line">
                        <input class="reg-line-input" type="text" id="email" name="email" placeholder="Електронна пошта" style="padding-left: 10px;">
                    </div>
                    <div class="reg-telegram">
                        <input class="reg-telegram-check" type="checkbox" id="telegram" name="telegram">
                        <label class="reg-telegram-text" for="telegram">Зв'яжіться зі мною в Telegram</label>
                    </div>
                </div>
                <div class="reg">
                    <h2 class="reg-title">Доставка та оплата</h2>
                    <div class="reg-line">
                        <select class="reg-line-choice" name="delivery" id="delivery" required>
                            <option class="reg-line-choice-item" value="" disabled selected hidden>* Оберіть спосіб доставки </option>
                            <option class="reg-line-choice-item" value="1">Самовивіз</option>
                            <option class="reg-line-choice-item" value="2">Нова Пошта</option>
                            <option class="reg-line-choice-item" value="3">Укрпошта</option>
                        </select>
                    </div>
                    <div class="reg-line">
                        <input class="reg-line-input" type="text" name="city" required placeholder="* Оберіть місто" style="padding-left: 10px;">
                    </div>
                    <div class="reg-line">
                        <select class="reg-line-choice" name="number" id="number" required>
                            <option class="reg-line-choice-item" value="" disabled selected hidden>* Оберіть відділення</option>
                            <option class="reg-line-choice-item" value="1">Відділення №1</option>
                            <option class="reg-line-choice-item" value="2">Відділення №2</option>
                            <option class="reg-line-choice-item" value="3">Відділення №3</option>
                        </select>
                    </div>
                        <div class="reg-line">
                            <select class="reg-line-choice" name="payment" id="payment" required>
                                <option class="reg-line-choice-item" value="" disabled selected hidden>* Оберіть спосіб оплати</option>
                                <option class="reg-line-choice-item" value="1">Переказ на карту</option>
                                <option class="reg-line-choice-item" value="2">Готівкою</option>
                            </select>
                        </div>
                    <div class="reg-comment">
                        <textarea class="reg-comment-area" name="comment" rows="4" cols="42" maxlength="200" placeholder="Додайте коментар (за бажанням)"></textarea>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="final_order">
                    <h2 class="final_order-title">Ваше замовлення</h2>
                    @foreach($cart as $item)
                        @php
                            $productId = $item['phone_id'];
                            $product = $products[$productId];
                        @endphp
                        <div class="final_order-prod">
                            <img class="final_order-prod-img" src="{{ asset($item['photo']) }}" alt="Product Photo">
                            <p class="final_order-prod-info">{{ $product->model->model_name }} {{ $item['memory_size'] }} ГБ<br>({{ $product->color->color }})</p>
                            <p class="final_order-prod-price">{{ $item['price'] }} грн</p>
                            <img class="final_order-prod-cross-img" src="{{ asset('img/Галочка.svg') }}" alt="Хрестик">
                        </div>
                    @endforeach
                    <div class="final_order-sum">
                        <p class="final_order-sum-text">Сума вашого замовлення: </p>
                        <p class="final_order-sum-price">{{$totalPrice}} грн</p>
                    </div>

                    <div class="choice-info-add">
                        <div class="final_order-button">
                            <button class="final_order-button-a" type="submit">
                                <span class="final_order-button-text">Оформити замовлення</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
