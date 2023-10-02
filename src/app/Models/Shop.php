<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genres_id');
    }
    public function area()
    {
        return $this->belongsTo(Area::class, 'areas_id');
    }

    public function isFavoriteByUser($user)
    {
        return $this->favorites()->where('user_id', $user->id)->exists();
    }

    // お気に入り情報へのリレーション
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
