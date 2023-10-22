<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserve;


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
            'shops_id' => $request->input('shops_id'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'number' => $request->input('number'),
        ]);
        $reservation->save();

        return view('done');
    }

}
