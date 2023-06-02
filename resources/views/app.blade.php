<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iSTART</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="page page-dark">
    <div class="wrapper">
        <header class="header">
            <img class="burger" src="{{ asset('img/free-icon-menu-2976215 (1) 3.png') }}" alt="Burger">
            <a href="{{route('lending')}}"><img class="logo-img" src="{{ asset('img/Логотип.svg') }}" alt="Логотип"></a>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('about_us') }}">Про нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}">Контакти</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('payment_and_delivery') }}">Оплата та доставка</a></li>
                </ul>
            </nav>
            <div class="contact">
                <p class="contact-phone">+380ххххххххх</p><br>
                <p>Пн-Нд: 09:00-20:00</p>
            </div>
            <nav>
                <li class="bask"><a class="bask-link" href="{{ route('cart.show') }}"><img class="bask-img" src="{{ asset('img/Кошик.svg') }}" width="40" height="40" alt="Корзина"></a></li>
            </nav>
        </header>
    </div>
</div>
<div class="page page-grey">
    <div class="wrapper">
        <div class="menu">
            <nav>
                <ul class="nav">
                    <li class="nav-menu"><a class="nav-mlink" href="{{ route('phones') }}">Телефони</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<main>
    @yield('content')
</main>
<div class="page page-dark">
    <div class="wrapper">
        <footer class="footer">
            <div class="links">
                <div class="column">
                    <h3 class="column-title">Важлива інформація</h3>
                    <nav>
                        <ul class="column-nav">
                            <li class="column-nav-item"><a class="column-nav-link" href="{{ route('about_us') }}">Про нас</a></li>
                            <li class="column-nav-item"><a class="column-nav-link" href="{{ route('contacts') }}">Контакти</a></li>
                            <li class="column-nav-item"><a class="column-nav-link" href="{{ route('payment_and_delivery') }}">Оплата та доставка</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="column">
                    <h3 class="column-title" style="margin-top: -43px">Каталог</h3>
                    <nav>
                        <ul class="column-nav">
                            <li class="column-nav-item"><a class="column-nav-link" href="{{ route('phones') }}">Телефони</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="column">
                    <h3 class="column-title">Контакти</h3>
                    <nav>
                        <ul class="column-nav">
                            <li class="column-nav-item"><p class="column-nav-link" style="margin-bottom: -10px">+380ххххххххх</p></li>
                            <li class="column-nav-item"><p class="column-nav-link" style="margin-bottom: -10px">istart@gmail.com</p></li>
                            <li class="column-nav-item"><p class="column-nav-link">м. Кременчук, вул. Шевченка 0</p></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
</div>
</body>
</html>
