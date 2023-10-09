@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail_content">
    <div class="shop-detail">
        <a href="{{ route('index') }}" class="back-button"><</a>
        <h2 class="shop_name">{{ $shop->name }}</h2>
        <img class="card_img" src={{ $shop->image }} alt="" />
        <p class="tag">#{{ $shop->genre->name }} #{{ $shop->area->name }}</p>
        <!-- その他店舗詳細情報を表示する部分を追加 -->

        <p class="shop_summary">{{ $shop->summary }}</p>
    </div>

    <div class="reserve_form">
        <h1 class="title">予約</h1>
        @auth
        <!-- ログインしている場合の予約フォーム -->
        <form action="{{ route('reserve') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="date">予約日</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">予約時間</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="number">人数</label>
                <input type="number" id="number" name="number" required>
            </div>
            <input type="hidden" name="shops_id" value="{{ $shop->id }}">
            <button type="submit">予約する</button>
        </form>
        @else
        <!-- ログインしていない場合のリンク -->
        <p>予約するには<a href="{{ route('login') }}">ログイン</a>または<a href="{{ route('register') }}">会員登録</a>してください。</p>
        @endauth
    </div>
</div>
    </div>
</div>
@endsection