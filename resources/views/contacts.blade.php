@extends('app')

@section('content')
    <div class="wrapper">
        <div class="contacts">
            <div class="title">
                <h1 class="title-text">Контакти</h1>
            </div>
            <div class="div">
                <p class="contacts-text">Інтернет-магазин “iSTART”</p>
                <img class="contacts-img" src="{{asset('img/Стрілка_вниз.png')}}" alt="Стрілка">
            </div>
            <div class="contacts-column">
                <div class="contacts-column-1">
                    <p class="contacts-text">Номер телефону:</p>
                    <p class="contacts-text">Пошта:</p>
                    <p class="contacts-text">Месенджери:</p>
                </div>
                <div class="contacts-column-1">
                    <p class="contacts-text">+380ххххххххх</p>
                    <p class="contacts-text">iStart@gmail.com</p>
                    <p class="contacts-text">Telegram Viber</p>
                </div>
                <div class="contacts-column-1">
                    <p class="contacts-text">Графік роботи”</p>
                    <p class="contacts-text">Щоденно з 9:00 до 20:00</p>
                </div>
            </div>
        </div>
    </div>
@endsection
