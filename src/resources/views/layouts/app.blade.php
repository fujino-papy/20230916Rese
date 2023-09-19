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
    <script src="{{ mix('js/main.js') }}"></script>
</head>

<body>
<header>
    <div class="overlay" id="js-overlay"></div>
    <div class="modal" id="js-modal">

        <div class="modal-close__wrap">
        <button class="modal-close" id="js-close">
        <a class="close-button">☓</a>
        </button>
        </div>
    <div class="modal-content">
    </div>
    </div>
    </div>

    <button class="modal-open" id="js-open">--<br>---<br>-</button>
    <a class="header__logo" href="/">Rese</a>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="{{ mix('js/main.js') }}"></script>
</header>
<main>

@yield('content')
</main>
</body>

</html>