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

        // ユーザーの予約情報を取得
        $reserves = Reserve::where('users_id', $user->id)->get();

        return view('mypage', compact('favorites', 'reserves'));
    }
}