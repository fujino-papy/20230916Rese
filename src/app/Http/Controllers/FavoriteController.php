<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
public function favorite(Request $request, $shopId)
    {
        $userId = auth()->user()->id;

        $favorite = Favorite::where('shops_id', $shopId)
            ->where('users_id', $userId)
            ->first();

        if (!$favorite) {
            $favorite = new Favorite();
            $favorite->users_id = $userId;
            $favorite->shops_id = $shopId;
            $favorite->save();
        }

        return back();
    }

    public function favoriteDelete(Request $request, $shopId)
    {
        $userId = auth()->user()->id;

        $favorite = Favorite::where('shops_id', $shopId)
            ->where('users_id', $userId)
            ->first();

        if ($favorite) {
            $favorite->delete();
        }

        return back();
    }
}
