<?php

namespace App\Http\Controllers;

use App\Models\ToolStatus;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ToolStatusController extends Controller
{
    public function checkedOutByUserId(Request $request){
        // get user id from request
        // get tool id from request
        // get checkout date find how to save
         $ToolStatus = new ToolStatus;
         $ToolStatus->condition_checkout = "good";
            $ToolStatus->condition_checkin = "good";
            $ToolStatus->user_id = request('user_id');
            $ToolStatus->tool_id = request('tool_id');
            $ToolStatus->checkout_date = Carbon::now()->timestamp;
            $ToolStatus->save();
    }
}
