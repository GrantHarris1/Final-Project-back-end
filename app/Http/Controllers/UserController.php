<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //


    /**
     * Log a User out
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        if (Auth::user()) {
        $user = Auth::user()->token();
        $user->revoke();
        return response()->json([
            'success' => true,
            'message' => 'Logout successfully',
        ]);
        } else {
        return response()->json([
            'success' => false,
            'message' => 'Unable to Logout',
        ]);
        }
    }
}
