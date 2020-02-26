<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserChallange extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Model\User', 'user_id', 'id');
    }

    public function challange()
    {
        return $this->belongsTo('App\Model\Challange', 'challange_id', 'id');
    }
}
