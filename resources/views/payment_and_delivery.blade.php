@extends('app')

@section('content')
    <div class="wrapper">
        <div class="title">
            <h1 class="title-text">Способи оплати</h1>
        </div>
        <div class="payment_meth">
            <div class="payment_meth-block">
                <img class="payment_meth-block-img" src="{{asset('img/Переказ на карту.svg')}}" alt="Переказ на карту">
                <div class="payment_meth-block-text">
                    <span class="payment_meth-block-text-name">Переказ на карту<br></span>
                    <span class="payment_meth-block-text-info">5375 4141 0000 0000</span>
                </div>
            </div>
            <div class="payment_meth-block">
                <img class="payment_meth-block-img" src="{{asset('img/Готівка.svg')}}" alt="Готівка">
                <div class="payment_meth-block-text">
                    <span class="payment_meth-block-text-name">Готівкою<br></span>
                    <span class="payment_meth-block-text-info">При отриманні товару</span>
                </div>
            </div>
        </div>
        <div class="title">
            <h1 class="title-text">Доставка</h1>
        </div>
        <div class="delivery">
            <span class="delivery-num">1</span>
            <span class="delivery-name">Доставка “Нова пошта”</span>
            <img class="delivery-img" src="{{asset('img/Нова пошта.svg')}}" alt="Нова пошта">
        </div>
        <div class="delivery">
            <span class="delivery-num">2</span>
            <span class="delivery-name">Доставка “Укрпошта”</span>
            <img class="delivery-img" src="{{asset('img/Укрпошта.svg')}}" alt="Укрпошта">
        </div>
        <div class="delivery">
            <span class="delivery-num">3</span>
            <span class="delivery-name">Самовивіз</span>
            <img class="delivery-img" src="{{asset('img/Самовивіз.svg')}}" alt="Самовивіз">
        </div>
    </div>
@endsection
