<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    <script src="{{ mix('js/main.js') }}"></script>
</head>

<body>
  <div class="overlay" id="js-overlay"></div>
  <div class="modal" id="js-modal">

    <div class="modal-close__wrap">
      <button class="modal-close" id="js-close">
        <span></span>
        <span></span>
      </button>
    </div>
<div class="modal-content">
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
</div>
</div>
  </div>

  <button class="modal-open" id="js-open">モーダルウィンドウオープン</button>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="{{ mix('js/main.js') }}"></script>
        <a class="header__logo" href="/">
            Rese</a>
    </header>

    <main>
        
    @yield('content')
    </main>
</body>

</html>