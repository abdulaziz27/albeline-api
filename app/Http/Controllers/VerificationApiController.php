<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VerificationApiController extends Controller
{
    public function verify(Request $request)
    {
        $userID = $request['id'];
        $user = User::findOrFail($userID);
        $date = date('Y-m-d g:i:s');
        $user->email_verified_at = $date;
        $user->save();
        return view('emailverified');
    }

    public function resend(Request $request)
    {
        $userEmail = $request['email'];
        $user = User::where("email", $userEmail)->first();

        if(!$user) {
            return response()->error("There is no user with that email in our data");
        } elseif ($user['email_verified_at'] != null) {
            return response()->error("The user email has been verified");
        }
        $user->sendEmailVerificationNotification();
        return response()->success("The notification has been sent to your mailbox!");
    }
}
