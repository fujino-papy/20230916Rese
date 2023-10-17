@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<h1 class="username">{{ Auth::user()->name }}さん</h1>

<H1 class="reserve">予約状況</H1>
<div class="reserve_list">
        @foreach($reserves as $reserve)
        <div class="reserve_list_content">
            <div class="reserve_list_header">
                <img class="clock_img" src="{{ asset('img/clock.png') }}" alt="clock">
                <div class="reserve_title">
                <a class="reserve_number">予約{{ $loop->iteration }}</a>
                </div>
                <form class="reserveDelete" action="{{ route('reserve/delete' , $reserve->shops_id) }}" method="post">
                                @csrf
                    <button type="submit" class="closs"><img class="delete_img" src="{{ asset('img/delete.png') }}"></button>
                </form>
            </div>
            <table class="reserve_detail_table">
                <tr class="reserve_detail_tr">
                    <td>Shop</td>
                    <td class="reserve_detail_td">{{ $reserve->shop->name }}</td>
                </tr>
                <tr class="reserve_detail_tr">
                    <td>Date</td>
                    <td class="reserve_detail_td">{{ $reserve->date }}</td>
                </tr>
                <tr class="reserve_detail_tr">
                    <td>Time</td>
                    <td class="reserve_detail_td">{{ $reserve->time }}</td>
                </tr>
                <tr class="reserve_detail_tr">
                    <td>Number</td>
                    <td class="reserve_detail_td">{{ $reserve->number }}<a>人</a></td>
                </tr>
            </table>
        </div>
        @endforeach
</div>

<h1 class="favorite">お気に入り店舗</h1>
<div class="favorite_list">
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
                <form  class="detail_form" action="{{ route('detail', $favorite->shop) }}">
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