<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;
use Carbon\Carbon;


class ReserveController extends Controller
{
    public function reserve(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'number' => 'required|integer',
        ]);

        // リクエストから選択された日付と時間を取得
        $selectedDateTime = Carbon::parse($request->input('date') . ' ' . $request->input('time'));

        // 現在の日付と時間を取得
        $currentDateTime = Carbon::now();

        // 選択された日付と時間が過去であるかどうかをチェック
        if ($selectedDateTime->isPast()) {
            return redirect()->back()->with('error', '過去の日付と時間に予約することはできません。');
        }

        $reservation = new Reserve([
            'users_id' => auth()->user()->id,
            'shops_id' => $request->input('shops_id'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'number' => $request->input('number'),
        ]);
        $reservation->save();

        return view('done');
    }

}
