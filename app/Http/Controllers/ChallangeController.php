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
        if ($user->current_id != 0) {
            return Challange::find($user->current_id);
        } else {
            if ($user->previous == 'clue') {
                $challange = Challange::where('type', 'activity')->get()->except($userChallage)->random();
            } else if ($user->previous == 'activity') {
                $challange = Challange::where('type', 'clue')->get()->except($userChallage)->random();
            }

            $user             = User::find($user->id);
            $user->current_id = $challange->id;
            $user->current    = $challange->type;
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

    public function setChallange(Request $request)
    {
        $challange                  = Challange::find($request->challange_id);
        $user                       = auth()->user();
        $user                       = User::find($user->id);
        $userChallage               = new UserChallange;
        $userChallage->user_id      = $user->id;
        $userChallage->challange_id = $challange->id;
        if ($userChallage->save()) {

            $challanges = Challange::count();
            $userChallages = UserChallange::where('user_id', $user->id)->count();
            if ($challanges === $userChallages) {
                $user->previous   = $challange->type;
                $user->current_id = 100;
                $user->current    = 'winner';
                if ($user->update()) {
                    return response()->json([
                        'status'    => 'winner',
                        'message'   => 'Challange Completed'
                    ], 200);
                } else {
                    return response()->json([
                        'status'    => 'error',
                        'message'   => 'Error Completing Challange'
                    ], 404);
                }
            } else {
                $user->previous   = $challange->type;
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
            }
        } else {
            return response()->json([
                'status'    => 'error',
                'message'   => 'Error Completing Challange'
            ], 404);
        }
    }
}
