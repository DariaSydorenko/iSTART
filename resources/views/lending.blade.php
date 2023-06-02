@extends('app')

@section('content')
    <div class="baner">
        <div class="wrapper">
            <img class="baner-img" src="{{asset('img/Банер.png')}}" alt="Банер">
        </div>
    </div>
    <div class="wrapper">
        <div class="left-title">
            <h1 class="left-title-text">Хіти продажу</h1>
            <img class="left-title-img" src="{{asset('img/Вогник.svg')}}" alt="Вогник">
        </div>
    </div>
    <div class="wrapper">
        <div class="line">
            @foreach($hits as $hit)
                <div class="product">
                    <img class="product-img" src="{{ asset($hit->photo) }}" alt="Product Photo">
                    <p class="product-name">{{$hit->model->model_name}}<br>{{$hit->memory_size}} ГБ</p>
                    <p class="product-price">{{$hit->price}} грн</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="wrapper">
        <div class="left-title">
            <h1 class="left-title-text">Шалені знижки</h1>
            <img class="left-title-img" src="{{asset('img/Знижка.svg')}}" alt="Знижка">
        </div>
    </div>
    <div class="wrapper">
        <div class="line">
            @foreach($discounts as $discount)
                <div class="product">
                    <img class="product-img" src="{{ asset($discount->photo) }}" alt="Product Photo">
                    <p class="product-name">{{$discount->model->model_name}}<br>{{$discount->memory_size}} ГБ</p>
                    <p class="product-old-price">{{$discount->old_price}} грн</p>
                    <p class="product-new-price">{{$discount->price}} грн</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="wrapper">
        <div class="title">
            <h1 class="title-text">Все для Вас від i<span style="color: #D62828;">START</span></h1>
            <img class="title-img" src="{{asset('img/Палець.svg')}}" alt="Вказівник">
        </div>
    </div>
    <div class="wrapper">
        <div class="blocks">
            <div class="block">
                <span class="block-red"><img class="block-img" src="{{asset('img/free-icon-product-1170679 1.svg')}}" alt="Широкий вибір"></span>
                <p class="block-text">Широкий вибір</p>
            </div>
            <div class="block">
                <span class="block-red"><img class="block-img" src="{{asset('img/free-icon-best-price-6948414 1.svg')}}" alt="Доступні ціни"></span>
                <p class="block-text">Доступні ціни</p>
            </div>
            <div class="block">
                <span class="block-red"><img class="block-img" src="{{asset('img/free-icon-delivery-7610711 1.svg')}}" alt="Швидка доставка"></span>
                <p class="block-text">Швидка доставка</p>
            </div>
            <div class="block">
                <span class="block-red"><img class="block-img" src="{{asset('img/free-icon-shield-1489589 1.svg')}}" alt="Гарантія якості"></span>
                <p class="block-text">Гарантія якості</p>
            </div>
            <div class="block">
                <span class="block-red"><img class="block-img" src="{{asset('img/free-icon-service-5935741 1.svg')}}" alt="Сервіс"></span>
                <p class="block-text">Сервіс</p>
            </div>
        </div>
    </div>
@endsection
