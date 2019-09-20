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
}
