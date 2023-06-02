@extends('app')

@section('content')
    <div class="wrapper">
        <div class="path">
            <a class="path-link" href="{{ route('lending') }}">
                <img class="path-img" src="{{ asset('img/Будинок.svg') }}" alt="Будинок">
            </a>
            <img class="path-arrow" src="{{ asset('img/Стрілка.svg') }}" alt="Стрілка">
            <a class="path-link-name" href="{{ route('phones') }}">
                <span class="path-name">Телефони</span>
            </a>
            <img class="path-arrow" src="{{ asset('img/Стрілка.svg') }}" alt="Стрілка">
            <span class="path-name">Iphone 11</span>
        </div>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="choice">
                <div class="choice-img">
                    <img class="choice-img-main" src="{{ asset($product->photo) }}" alt="11">
                    <div class="choice-img-small">
                        <img class="choice-img-small-1" src="{{ asset($product->photo) }}" alt="11">
                        <img class="choice-img-small-1" src="{{ asset($product->photo) }}" alt="11">
                        <img class="choice-img-small-1" src="{{ asset($product->photo) }}" alt="11">
                        <img class="choice-img-small-1" src="{{ asset($product->photo) }}" alt="11">
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="choice-info">
                <h3 class="choice-info-name">{{ $product->model->model_name }} {{ $product->memory_size }} ГБ ({{ $product->color->color}})</h3>
                <span class="choice-info-price">{{ $product->price }} грн</span>
                <div class="choice-info-availability">
                    <img class="choice-info-availability-img" src="{{ asset('img/Зелена галочка.svg') }}" alt="Галочка">
                    <span class="choice-info-availability-text">Є в наявності</span>
                </div>
                <div class="choice-info-payment">
                    <img class="choice-info-payment-1" src="{{ asset('img/ПриватБанк.svg') }}" alt="Приват Банк">
                    <img class="choice-info-payment-1" src="{{ asset('img/Бінанс.svg') }}" alt="Бінанс">
                    <img class="choice-info-payment-1" src="{{ asset('img/МоноБанк.svg') }}" alt="Моно Банк">
                </div>
                <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="phone_id" value="{{ $product->phone_id }}">
                    <input type="hidden" name="model_id" value="{{ $product->model->model }}">
                    <input type="hidden" name="color_id" value="{{ $product->color->color }}">
                    <input type="hidden" name="memory_size" value="{{ $product->memory_size }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="old_price" value="{{ $product->old_price }}">
                    <input type="hidden" name="photo" value="{{ $product->photo }}">
                    <div class="choice-info-add">
                        <button type="submit" class="choice-info-add-link">
                            <span class="choice-info-add-text">Додати у кошик</span>
                        </button>
                    </div>
                </form>
                <div class="choice-info-fast">
                    <a class="choice-info-fast-link" href="{{ route('quick_buy') }}">
                        <span class="choice-info-fast-text">Швидка покупка</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
