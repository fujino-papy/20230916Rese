@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="content">
    <div>
    <a class="message">ご予約ありがとうございます</a>
    </div>
    <form class="back" action="{{ route('index')}}">
        <button class="back_button">戻る</button>
    </form>
</div>
@endsection