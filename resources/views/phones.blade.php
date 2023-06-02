@extends('app')

@section('content')
    <div class="wrapper">
        <div class="path">
            <a class="path-link" href="{{ route('lending') }}">
                <img class="path-img" src="{{asset('img/Будинок.svg')}}" alt="Будинок">
            </a>
            <img class="path-arrow" src="{{asset('img/Стрілка.svg')}}" alt="Стрілка">
            <span class="path-name">Телефони</span>
        </div>
    </div>
    <div class="wrapper">
        <div class="sort">
            <span class="sort-sorting">Сортування: </span>
            <span class="sort-type">Відсутнє</span>
            <img class="sort-arrow-bot" src="{{asset('img/Стрілка.svg')}}" alt="Стрілка">
        </div>
    </div>
    <div class="container">
        <div class="wrapper">
            <div class="min-filt">
                <img class="min-filt-img" src="{{asset('img/Фільтри.svg')}}" alt="Фільтри">
                <span class="min-filt-name">Фільтри</span>
            </div>
        </div>
        <div class="wrapper">
            <div class="min-sort">
                <img class="min-sort-img" src="{{asset('img/free-icon-ascending-sort-7183242 1.svg')}}" alt="Сортування">
                <span class="min-sort-name">Сортування</span>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="filters">
            <div class="filters-title">
                <img class="filters-title-img" src="{{asset('img/Фільтри.svg')}}" alt="Фільтри">
                <h2 class="filters-title-text">Фільтри</h2>
            </div>
            <div class="filters-button">
                <p class="filters-button-text">Модель</p>
                <img class="filters-button-img" src="{{asset('img/Стрілка_вниз.png')}}" alt="Стрілка">
            </div>
            <div class="filters-button">
                <p class="filters-button-text">Об'єм пам'яті</p>
                <img class="filters-button-img" src="{{asset('img/Стрілка_вниз.png')}}" alt="Стрілка">
            </div>
            <div class="filters-button">
                <p class="filters-button-text">Колір</p>
                <img class="filters-button-img" src="{{asset('img/Стрілка_вниз.png')}}" alt="Стрілка">
            </div>
            <div class="filters-button">
                <p class="filters-button-text">Ціна</p>
                <img class="filters-button-img" src="{{asset('img/Стрілка_вниз.png')}}" alt="Стрілка">
            </div>
            <div class="filters-button">
                <p class="filters-button-text">Скинути фільтри</p>
                <img class="filters-button-img" src="{{asset('img/Хрестик.svg')}}" alt="Стрілка">
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="products">
            @foreach($phones as $phone)
                <div class="products-prod">
                    <a class="products-prod-link" href="{{ route('show', $phone->phone_id) }}">
                        <img class="products-prod-img" src="{{ asset($phone->photo) }}" alt="Product Photo">
                        <p class="products-prod-name">{{$phone->model->model_name}}<br>{{$phone->memory_size}} ГБ</p>
                        <p class="products-prod-price">{{$phone->price}} грн</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
