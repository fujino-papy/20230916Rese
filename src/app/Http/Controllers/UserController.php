<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Reserve;
use Carbon\Carbon;


class UserController extends Controller
{
    public function myPage(Request $request)
    {
        $user = $request->user();

        $favorites = Favorite::where('users_id', $user->id)->with('shop')->get();

        $reserves = Reserve::where('users_id', $user->id)
            ->orderBy('date', 'asc')
            ->get();

        foreach ($reserves as $reserve) {
            $reserve->time = Carbon::parse($reserve->time)->format('H:i');
        }


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