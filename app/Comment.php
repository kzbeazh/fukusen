<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function works()
    {
        return $this->belongsTo(Work::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
