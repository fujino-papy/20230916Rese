@extends('layouts.logined')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="list">
    @php
    $genres = \App\Models\Genre::all();
    $areas = \App\Models\Area::all();
@endphp
    @foreach ($shops as $shop)
        <div class="shop_card">
        <div>
            <img class="card_img" src={{ $shop->image }} alt="" />
        </div>
        <div class="card__content">
            <h2 class="shop_name">{{ $shop->name }}</h2>
            <h2 class="card__ttl">
            #{{ $shop->genre->name }}
            #{{ $shop->area->name }}
            </h2>
            <form  class="detail_form" action="{{ route('detail', $shop) }}">
            <button class="detail">詳しく見る</button>
            </form>
            <div class="favorite_button">
                @if(auth()->check())
                    @if($shopFavorites[$shop->id])
                        <form class="favoriteDelete" action="{{ route('favorite/delete' , $shop->id) }}" method="post">
                            @csrf
                            <button type="submit" class="heart"><img class="heart_img" src="{{ asset('img/heart_on.png') }}" alt="on"></button>
                        </form>
                    @else
                        <form class= "favorite" action="{{ route('favorite', $shop->id) }}" method="post">
                            @csrf
                            <button type="submit" class="heart"><img class="heart_img" src="{{ asset('img/heart_off.png') }}" alt="off"></button>
                        </form>
                    @endif
                @endif
            </div>
        </div>
        </div>
    @endforeach
</div>

@endsection