@extends('app')

@section('content')
    <div class="wrapper">
        <div class="title">
            <h1 class="title-text">Про нас</h1>
        </div>
        <div class="about_us">
            <p class="about_us-text">Вітаю!<br>
                Ти знайшов найкращий магазин смартфонів та аксесуарів Apple. Ми стараємося, щоб ти отримав найкращий сервіс.
                Надаємо гарантію на товари. Робимо відправку в день замовлення і все інше, щоб стати кращими завтра, а також, щоб ти залишив нам найкращий відгук!</p>
        </div>
        <div class="title">
            <h1 class="title-text">Де нас знайти?</h1>
        </div>
        <div class="map">
            <img class="map-img" src="{{asset('img/Карта.png')}}" alt="Карта">
        </div>
    </div>
@endsection
