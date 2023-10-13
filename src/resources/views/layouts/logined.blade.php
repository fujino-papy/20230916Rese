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
        <form action="{{ route('search') }}" method="GET">
            <div class="form-group">
                <input type="text" name="name" placeholder="店名で検索" value="{{ urldecode(request('name')) }}">
            </div>
            <div class="form-group">
                <select name="genre">
                    <option value="">ジャンルで絞り込み</option>
                    <!-- ジャンルのオプションをループで生成 -->
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->name }}" {{ request('genre') == $genre->name ? 'selected' : '' }}>
                    {{ urldecode($genre->name) }}
                </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <select name="area">
                    <option value="">エリアで絞り込み</option>
                    <!-- エリアのオプションをループで生成 -->
                    @foreach ($areas as $area)
                        <option value="{{ $area->name }}" {{ request('area') == $area->name ? 'selected' : '' }}>
                    {{ urldecode($area->name) }}
                </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit">検索</button>
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