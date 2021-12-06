<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //


    /**
     * Log a User out
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        if (Auth::check()) {
            $request->user()->token()->revoke();
            return response()->json(['success' => 'logout success'], 200);
        } else {
            return response()->json(['error' => 'something went wrong'], 500);
        }
    }
}
