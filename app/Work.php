<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    
//作品との1対多    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
///////お気に入り機能

    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'micropost_id', 'user_id')->withTimestamps();
    }
}
