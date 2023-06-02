@extends('app')

@section('content')
    <form method="POST" action="{{ route('quick_store') }}">
        @csrf
        <div class="wrapper">
            <div class="quick">
                <label class="quick-text" for="phone">Введіть номер телефону:</label>
                <input class="quick-input" type="text" name="phone" id="phone" placeholder="+38(___)-___-__-__" style="padding-left: 10px;" pattern="\+38\([0-9]{3}\)-[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
                <div class="quick-button">
                    <button class="quick-button-link" type="submit">
                        <span class="quick-button-text">Оформити замовлення</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection
