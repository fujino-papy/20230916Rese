<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
<header>
    <div class="header">
        <label class="open" for="pop-up">--<br>---<br>-</label>
        <a class="header__logo" href="/">Rese</a>
        <input type="checkbox" id="pop-up">
        <div class="overlay">
            <div class="window">
                <label class="close" for="pop-up">☓</label>
                <nav>
            <ul class="menu_content">
                <li class="menu__item">
                <a class="menu__link" href="/">Home</a>
                </li>
                <li class="menu__item">
                <a class="menu__link" href="/register">Registration</a>
                </li>
                <li class="menu__item">
                <a class="menu__link" href="/login">Login</a>
                </li>
            </ul>
            </nav>
            </div>
        </div>
    </div>
</header>
<main>

@yield('content')
</main>
</body>

</html>