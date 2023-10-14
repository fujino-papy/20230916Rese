<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;
    protected $fillable = ['users_id', 'shops_id', 'date', 'time', 'number'];

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shops_id');
    }
}

