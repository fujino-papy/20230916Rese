<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(Request $request)
    {

        $query = Shop::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->has('genre')) {
            $genre = $request->input('genre');
            $query->whereHas('genre', function ($subQuery) use ($genre) {
                $subQuery->where('name', 'like', '%' . $genre . '%');
            });
        }

        if ($request->has('area')) {
            $area = $request->input('area');
            $query->whereHas('area', function ($subQuery) use ($area) {
                $subQuery->where('name', 'like', '%' . $area . '%');
            });
        }

        $shops = $query->get();

        $user = Auth::user();

        if ($user) {
            $favoriteShopIds = $user->favorites()->pluck('shops_id')->toArray();
            $shopFavorites = [];

            foreach ($shops as $shop) {
                $isFavorite = in_array($shop->id, $favoriteShopIds);
                $shopFavorites[$shop->id] = $isFavorite;
            }

            return view('index', ['shops' => $shops, 'shopFavorites' => $shopFavorites]);
        }
        return view('index', ['shops' => $shops]);
    }

    public function detail(Shop $shop)
    {
        return view('detail', compact('shop'));
    }
    }
