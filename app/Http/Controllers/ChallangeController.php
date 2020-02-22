<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Model\Challange;
use App\Model\UserChallange;
use Illuminate\Http\Request;

class ChallangeController extends Controller
{
    public function getChallange()
    {
        $user = auth()->user();
        $userChallage = UserChallange::where('user_id', $user->id)->get()->pluck(['id'])->toArray();
        if ($user->current_id) {
            return Challange::find($user->current_id);
        } else {
            if ($user->previous == 'clue') {
                $challange = Challange::where('type', 'activity')->get();
                $challange->except($userChallage)->random();

                $user             = User::find($user->id);
                $user->previous   = 'activity';
                $user->current_id = $challange->id;
                $user->current    = 'clue';
                if ($user->update()) {
                    return $challange;
                } else {
                    return response()->json([
                        'status'    => 'error',
                        'message'   => 'Error Reading Challange'
                    ], 404);
                }
            } else if ($user->previous == 'activity') {
                $challange = Challange::where('type', 'clue')->get();
                $challange->except($userChallage)->random();

                $user             = User::find($user->id);
                $user->previous   = 'clue';
                $user->current_id = $challange->id;
                $user->current    = 'activity';
                if ($user->update()) {
                    return $challange;
                } else {
                    return response()->json([
                        'status'    => 'error',
                        'message'   => 'Error Reading Challange'
                    ], 404);
                }
            }
        }
    }

    public function setChallange(Challange $challange)
    {
        $user                       = auth()->user();
        $user                       = User::find($user->id);
        $userChallage               = new UserChallange;
        $userChallage->user_id      = $user->id;
        $userChallage->challange_id = $challange->id;
        if ($userChallage->save()) {
            $user->previous   = $challange->type == 'clue' ? 'activity' : 'clue';
            $user->current_id = 0;
            $user->current    = '';
            if ($user->update()) {
                return response()->json([
                    'status'    => 'success',
                    'message'   => 'Challange Completed'
                ], 200);
            } else {
                return response()->json([
                    'status'    => 'error',
                    'message'   => 'Error Completing Challange'
                ], 404);
            }
        } else {
            return response()->json([
                'status'    => 'error',
                'message'   => 'Error Completing Challange'
            ], 404);
        }
    }
}
