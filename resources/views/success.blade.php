@extends('app')

@section('content')
    <div class="wrapper">
        <div class="success">
            <h1 class="success-title">Ваше замовлення успішно оформлено!</h1>
            <div class="success-button">
                <a class="success-button-link" href="{{route('lending')}}">
                    <span class="success-text">Продовжити покупки</span>
                </a>
            </div>
        </div>
    </div>
@endsection
