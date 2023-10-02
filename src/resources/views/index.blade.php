@extends('layouts.logined')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="list">
        @foreach ($shops as $shop)
    <div class="shop_card">
        <div>
            <img class="card_img" src={{ $shop->image }} alt="" />
        </div>
        <div class="card__content">
            <h2 class="shop_name">{{ $shop->name }}</h2>

            <h2 class="card__ttl">
            #{{ $shop->genre->name }}
            <br>
            #{{ $shop->area->name }}
            </h2>
            <a href="{{ route('detail', $shop) }}" class="detail">詳しく見る</a>
        </div>
        <div class="favorite_button">
            @if(auth()->check())
                <form action="{{ route('favorite.toggle', $shop->id) }}" method="POST">
            @csrf
                <button type="submit" class="heart" >
                </button>
                </form>
            @endif
        </div>
    </div>
        @endforeach
</div>

@endsection