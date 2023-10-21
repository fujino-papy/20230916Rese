@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="register-form__heading">
    <a class="register_logo">Register</a>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
    <div class="form__group">
        <div class="form__group-content">
        <div class="form__input--text">
            <img src="{{ asset('img/human.png') }}" alt="name">
        <input class="input" type="text" name="name" value="{{ old('name') }}" placeholder="Username"/>
        </div>
        <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-content">
        <div class="form__input--text">
            <img src="{{ asset('img/mail.png') }}" alt="mail">
            <input class="input" type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
        </div>
        <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        </div>
    </div>
    <div class="form__group">
        <div class="form__group-content">
        <div class="form__input--text">
            <img src="{{ asset('img/pass.png') }}" alt="pass">
            <input class="input" type="password" name="password" placeholder="Password" />
        </div>
        <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
        </div>
        </div>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">登録</button>
    </div>
    </form>
</div>
@endsection