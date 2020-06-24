@extends('layouts.header')
@section('title')
    <title>Регистрация</title>
@endsection()
@section('content')

    <form method="get" action="/registration" id="registration" class="feedback_form">
        <input type="text" name="login" placeholder="Укажите ваш логин" class="textboxreg" />
        <input type="password" name="password" placeholder="Укажите пароль" class="textboxreg" />
        <input type="text" name="email_address" placeholder="Укажите ваш Email!" class="textboxreg"   />
        <input type="submit" class="button2" value="Зарегистрироваться" />
    </form>
@endsection
