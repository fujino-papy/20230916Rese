<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index(Request $request)
    {

        // ショップ一覧を取得
        $query = Shop::query();

        // 店名での部分一致検索
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // ジャンルでの絞り込み
        if ($request->has('genre')) {
            $genre = $request->input('genre');
            $query->whereHas('genre', function ($subQuery) use ($genre) {
                $subQuery->where('name', 'like', '%' . $genre . '%');
            });
        }

        // エリアでの絞り込み
        if ($request->has('area')) {
            $area = $request->input('area');
            $query->whereHas('area', function ($subQuery) use ($area) {
                $subQuery->where('name', 'like', '%' . $area . '%');
            });
        }

        $shops = $query->get();

        // 現在のユーザーを取得
        $user = Auth::user();

        // ユーザーが認証されているかを確認
        if ($user) {
            // ユーザーがお気に入りに追加したショップIDのリストを取得
            $favoriteShopIds = $user->favorites()->pluck('shops_id')->toArray();

            // ショップごとにお気に入りかどうかを判定し、結果を格納する変数
            $shopFavorites = [];

            foreach ($shops as $shop) {
                $isFavorite = in_array($shop->id, $favoriteShopIds);
                $shopFavorites[$shop->id] = $isFavorite;
            }

            return view('index', ['shops' => $shops, 'shopFavorites' => $shopFavorites]);
        }

        // ユーザーが認証されていない場合でもショップ一覧を表示
        return view('index', ['shops' => $shops]);
    }

    public function detail(Shop $shop)
    {
        return view('detail', compact('shop'));
    }
    }
