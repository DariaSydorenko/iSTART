@extends('app')

@section('content')
    <div class="wrapper">
        <div class="title">
            <h1 class="title-text">Кошик</h1>
        </div>
        <div class="basket">
            <div class="basket-title">
                <span class="basket-title-text">Товар</span>
                <span class="basket-title-text">Ціна</span>
            </div>
            @foreach ($cart as $item)
                @php
                    $productId = $item['phone_id'];
                    $product = $products[$productId];
                @endphp
                <div class="basket-info">
                    <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" name="phone_id" value="{{ $item['phone_id'] }}">
                        <button class="basket-info-cross"><img class="basket-info-cross-img" src="{{ asset('img/Червоний хрестик.svg') }}" alt="Хрестик"></button>
                    </form>
                    <div class="basket-info-product">
                        <img class="basket-info-product-img" src="{{ $item['photo'] }}" alt="Product Photo">
                        <span class="basket-info-product-name">{{ $product->model->model_name }} {{ $item['memory_size'] }} ГБ ({{ $product->color->color }})</span>
                    </div>
                    <span class="basket-info-product-price">{{ $item['price'] }} грн</span>
                </div>
            @endforeach
        </div>
        <div class="payment">
            <span class="payment-text">Разом до сплати:</span>
            <span class="payment-price">{{$totalPrice}} грн</span>
        </div>
        <div class="button">
            @if(count($cart) > 0)
                <a class="button-link" href="{{route('order.show')}}">
                    <span class="button-text">Перейти до оформлення</span>
                </a>
            @else
                <button class="button-disabled">
                    <p class="button-disabled-text">Оформити замовлення</p>
                </button>
            @endif
        </div>
    </div>
@endsection
