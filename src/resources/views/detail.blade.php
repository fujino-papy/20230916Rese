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

        <p class="shop_summary">{{ $shop->summary }}</p>
    </div>

    <div class="reserve_form">
        <h1 class="title">予約</h1>
        @auth
        <form action="{{ route('reserve') }}" method="POST">
            @csrf
            <div class="form-group">
                @php
                $today = now();
                $todayFormatted = $today->format('Y-m-d');
                @endphp
                <input class="date" type="date" id="date" name="date" required value="{{ $todayFormatted }}"    >
            </div>
            <br>
            <div class="form-group">
                <select class="time" id="time" name="time" required>
                @for ($hour = 18; $hour <= 23; $hour++)
                    @for ($minute = 0; $minute <= 45; $minute += 15)
                        @php
                        $time = sprintf('%02d', $hour) . ':' . sprintf('%02d', $minute);
                        @endphp
                        <option value="{{ $time }}">
                            {{ $time }}
                        </option>
                    @endfor
                @endfor
                    {{-- 最後の選択肢を追加 --}}
                    <option value="00:00">00:00</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                        <select class="number" id="number" name="number" required>
                @for ($i = 1; $i <= 40; $i++)
                    <option value="{{ $i }}">{{ $i }}人</option>
                @endfor
            </select>
            </div>

            <table class="reserve_detail_table">
                <tr class="reserve_detail_tr">
                    <td class="reserve_detail_td">Shop</td>
                    <td class="reserve_detail_td">{{ $shop->name }}</td>
                </tr>
                <tr class="reserve_detail_tr">
                    <td class="reserve_detail_td">Date</td>
                    <td class="reserve_detail_td" id="reservationDate"></td>
                </tr>
                <tr class="reserve_detail_tr">
                    <td class="reserve_detail_td">Time</td>
                    <td class="reserve_detail_td" id="reservationTime"></td>
                </tr>
                <tr class="reserve_detail_tr">
                    <td class="reserve_detail_td">Number</td>
                    <td class="reserve_detail_td" id="reservationNumber"><a>人</a></td>
                </tr>
            </table>
            @if (session('error'))
                <div class="alert">
                    <p>{{ session('error') }}</p>
                </div>
            @endif
            <input type="hidden" name="shops_id" value="{{ $shop->id }}">
            <div class="reserve">
            <button class="reserve-button"  type="submit">予約する</button>
            </div>
        </form>
        @else
        <p>予約するには<a href="{{ route('login') }}">ログイン</a>または<a href="{{ route('register') }}">会員登録</a>してください。</p>
        @endauth
    </div>
</div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var dateInput = document.getElementById('date');
        var reservationDateCell = document.getElementById('reservationDate');
        var timeSelect = document.getElementById('time');
        var reservationTimeCell = document.getElementById('reservationTime');
        var numberSelect = document.getElementById('number');
        var reservationNumberCell = document.getElementById('reservationNumber');

        reservationDateCell.textContent = dateInput.value;
        reservationTimeCell.textContent = timeSelect.value;
        reservationNumberCell.textContent = numberSelect.value + ' 人';

        dateInput.addEventListener('input', function () {
            reservationDateCell.textContent = dateInput.value;
        });

        timeSelect.addEventListener('change', function () {
            reservationTimeCell.textContent = timeSelect.value;
        });

        numberSelect.addEventListener('change', function () {
            reservationNumberCell.textContent = numberSelect.value + ' 人';
        });
    });
</script>
@endsection
