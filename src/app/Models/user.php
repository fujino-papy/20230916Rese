<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Favorite;

class user extends Model
{
    use HasFactory;

    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'users_id');
    }
}
