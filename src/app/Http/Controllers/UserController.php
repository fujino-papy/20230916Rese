<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Reserve;


class UserController extends Controller
{
    public function myPage(Request $request)
    {
        $user = $request->user(); // ログインユーザーを取得

        // ユーザーのお気に入り情報を取得
        $favorites = Favorite::where('users_id', $user->id)->with('shop')->get();

        // ユーザーの予約情報を取得して、日付の近い順にソート
        $reserves = Reserve::where('users_id', $user->id)
            ->orderBy('date', 'asc')
            ->get();

        return view('mypage', compact('favorites', 'reserves'));
    }

    public function reserveDelete(Request $request,$shopId)
    {
        $userId = auth()->user()->id;

        $reserve = Reserve::where('shops_id',$shopId)
            ->where('users_id', $userId)
            ->first();

        if($reserve){
            $reserve->delete();
        }
        return back();
    }

}