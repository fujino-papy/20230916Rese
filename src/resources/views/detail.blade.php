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
                @php
                // 本日の日付を取得
                $today = now();
                // 本日の日付をYYYY-MM-DD形式にフォーマット
                $todayFormatted = $today->format('Y-m-d');
                @endphp
                <input type="date" id="date" name="date" required value="{{ $todayFormatted }}">
            </div>
            <div class="form-group">
                <label for="time">予約時間</label>
                <select id="time" name="time" required>
                @for ($hour = 18; $hour <= 24; $hour++)
                    @for ($minute = 0; $minute <= 45; $minute += 15)
                        <option value="{{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}">
                            {{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}
                        </option>
                    @endfor
                @endfor
                @for ($hour = 1; $hour <= 2; $hour++)
                    @for ($minute = 0; $minute <= 45; $minute += 15)
                        <option value="{{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}">
                            {{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}
                        </option>
                    @endfor
                @endfor
                </select>
            </div>
            <div class="form-group">
                        <label for="number">人数</label>
                        <select id="number" name="number" required>
                @for ($i = 1; $i <= 40; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            </div>

            <table class="reserve_detail_table">
                <tr class="reserve_detail_tr">
                    <td>Shop</td>
                    <td class="reserve_detail_td">{{ $shop->name }}</td>
                </tr>
                <tr class="reserve_detail_tr">
                    <td>Date</td>
                    <td class="reserve_detail_td"></td>
                </tr>
                <tr class="reserve_detail_tr">
                    <td>Time</td>
                    <td class="reserve_detail_td"></td>
                </tr>
                <tr class="reserve_detail_tr">
                    <td>Number</td>
                    <td class="reserve_detail_td"><a>人</a></td>
                </tr>
            </table>

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
