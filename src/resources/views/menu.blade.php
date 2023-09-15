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
    <header class="menu_header">
        <form class="return">
            @csrf
            <button class="return_button" >☓</button>
        </form>
    </header>
    <main>
    <div class="menu">
        <div class="menu-utilities">
        <nav>
            <ul class="menu_content">
                @if (Auth::check())
                <li class="menu__item">
                <a class="menu__link" href="/mypage">HOME</a>
            </li>
            <li class="menu__item">
                <form class="form" action="/logout" method="post">
                    @csrf
                <button class="menu__button">Logout</button>
                </form>
            </li>
            <li class="menu__item">
                <a class="menu__link" href="/mypage">Mypage</a>
            </li>
            @endif
            </ul>
        </nav>
        </div>
    </div>
    </main>
</body>