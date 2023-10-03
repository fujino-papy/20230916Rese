<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Favorite;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        $favorites = Favorite::all();
            return view('index', ['shops' => $shops],['favorites' => $favorites]);
        }


    public function detail(Shop $shop)
    {
        return view('detail', compact('shop'));
    }
    }
