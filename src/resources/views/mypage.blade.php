@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<div class="reserve_list">
        @foreach($reserves as $reserve)
        <div class="reserve_list_content">
            <h2>予約{{ $reserve->id }}</h2>
            <form class="reserveDelete" action="{{ route('reserve/delete' , $reserve->id) }}" method="post">
                            @csrf
                            <button type="submit" class="closs">☓</button>
                        </form>
            <a>Shop</a>{{ $reserve->shops_id }}
            <br>
            {{ $reserve->date }}
            <br>
            {{ $reserve->time }}
            <br>
            {{ $reserve->number }}
        </div>
        @endforeach
</div>

<div class="favorite_list">
    <h2>お気に入り情報</h2>
    <div class="favorite_list_content">
    @foreach($favorites as $favorite)
        <div class="shop_card">
            <div>
                <img class="card_img" src={{ $favorite->shop->image }} alt="" />
            </div>
            <div class="card__content">
                <h2 class="shop_name">{{ $favorite->shop->name }}</h2>
                <h2 class="card__ttl">
                #{{ $favorite->shop->genre->name }}
                #{{ $favorite->shop->area->name }}
                </h2>
                <form  class="detail_form">
                <button class="detail">詳しく見る</button>
                </form>
                <div class="favorite_button">
                            <form class="favoriteDelete" action="{{ route('favorite/delete' , $favorite->shop->id) }}" method="post">
                                @csrf
                                <button type="submit" class="heart"><img class="heart_img" src="{{ asset('img/heart_on.png') }}" alt="on"></button>
                            </form>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection