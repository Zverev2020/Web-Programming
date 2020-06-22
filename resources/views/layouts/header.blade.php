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
                <a class="nav_link" href="/section">Products</a>
                <a class="nav_link" href="/contact">Contact</a>
            </div>
        </div>
        <div class="contact_section">
            <h2 class="contact_p">Welcome To MasterComp Contact</h2>
            <div class="d1">
                <form>
                    <input type="text" placeholder="Искать здесь...">
                    <button type="submit"></button>
                </form>
            </div>
            </div>
        </div>
    @yield('content')
</body>
</html>
