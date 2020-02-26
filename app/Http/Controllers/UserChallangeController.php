<?php

namespace App\Http\Controllers;

use App\Model\UserChallange;
use Illuminate\Http\Request;

class UserChallangeController extends Controller
{
    public function challange($user)
    { 
        return UserChallange::where('user_id',$user)->get();
    }
}
