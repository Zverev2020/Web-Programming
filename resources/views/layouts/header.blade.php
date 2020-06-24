<!DOCTYPE html>
<html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    @yield('title')

    <link rel="stylesheet"  href="style.css">
</head>
<body>


    <div class="header">
        <div class="container">

            <a href="/index" id="logo">MasterComp</a>


            <div class="nav">

                <a class="nav_link" href="/index">Main</a>
                <a class="nav_link" href="/section">Product</a>
                <a class="nav_link" href="/reg">Registration</a>
                <a class="nav_link" href="/contact">Contact</a>

                    @if (!Auth::check())
                        </div>

                        <form method="get" action="/auth" id="login"    >
                            <input type="text" name="login" placeholder="Укажите ваш логин" class="textboxr" />
                            <input type="password" name="password" placeholder="Укажите пароль" class="textboxr" />
                            <input type="submit" class="button" value="Вход" />
                            </form>
                    @else
                        <a class="nav_link" href="/logout">Выход</a>
                        @endif
        </div>
        <div class="contact_section">
            <h2 class="contact_p">Welcome To MasterComp Contact</h2>
            <div class="d1">
                <form class="formfind" method="get" action="/search">
                    <input type="search" name="search_field" placeholder="Искать здесь..." class="textboxr">
                    <button type="submit" value="Найти"></button>
                </form>
            </div>
            </div>
        </div>
    @yield('content')
</body>
</html>
