@extends('layouts.base')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="content">
    <div>
    <a class="message">会員登録ありがとうございます
    </a>
    </div>
    <form class="back" action="{{ route('login')}}">
        <button class="back_button">ログイン</button>
    </form>
</div>
@endsection