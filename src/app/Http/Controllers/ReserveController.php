<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Reserve;
use App\Models\Shop;


class ReserveController extends Controller
{
    public function reserve(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'number' => 'required|integer',
        ]);

        $reservation = new Reserve([
            'users_id' => auth()->user()->id,
            // ログインしていることを前提としています
            'shops_id' => $request->input('shops_id'),
            // $shop変数が利用可能であることを前提としています
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'number' => $request->input('number'),
        ]);

        // 予約情報をデータベースに保存する
        $reservation->save();

        return view('done');
    }

}
