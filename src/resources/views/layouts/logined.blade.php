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
        <form action="{{ route('search') }}" method="GET" class="search-form">
            <div class="form-group">
                <select class="area" name="area" class="area">
                    <option value="">All area</option>
                    <!-- エリアのオプションをループで生成 -->
                    @foreach ($areas as $area)
                        <option value="{{ $area->name }}" {{ request('area') == $area->name ? 'selected' : '' }}>
                            {{ urldecode($area->name) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select class="genre" name="genre" class="genre">
                    <option value="">All genre</option>
                    <!-- ジャンルのオプションをループで生成 -->
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->name }}" {{ request('genre') == $genre->name ? 'selected' : '' }}>
                            {{ urldecode($genre->name) }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="search-input">
                <input class="name" type="text" name="name" placeholder="name" value="{{ urldecode(request('name')) }}">
                </div>
            </div>
            <div class="form-group">
                <div class="search-button-container">
                <button class="search" type="submit" class="search-button"><img class="search_img" src="{{ asset('img/search.png') }}"></button>
                </div>
            </div>
        </form>
        <input type="checkbox" id="pop-up">
        <div class="overlay">
            <div class="window">
                <label class="close" for="pop-up">☓</label>
                @auth
                <nav>
            <ul class="menu_content">
                <li class="menu__item">
                <a class="menu__link" href="/">Home</a>
                </li>
                <li class="menu__item">
                <a class="menu__link" href="/logout">Logout</a>
                </li>
                <li class="menu__item">
                <a class="menu__link" href="/mypage">Mypage</a>
                </li>
            </ul>
            </nav>
            @else
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
            @endauth
            </div>
        </div>
    </div>
</header>
<main>
@yield('content')
</main>
</body>

</html>