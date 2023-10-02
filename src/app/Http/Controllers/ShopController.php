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

            return view('index', ['shops' => $shops]);
        }


    public function detail(Shop $shop)
    {
        return view('detail', compact('shop'));
    }
    }
