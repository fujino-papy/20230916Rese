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
            #{{ $shop->genres_id }}
            <br>
            #{{ $shop->areas_id }}
            </h2>
            <button class="detail">詳しく見る</button>
        </div>
    </div>
        @endforeach
</div>

@endsection