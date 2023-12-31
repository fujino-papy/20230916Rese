<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;
use App\Models\User;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = ['users_id', 'shops_id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shops_id', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
