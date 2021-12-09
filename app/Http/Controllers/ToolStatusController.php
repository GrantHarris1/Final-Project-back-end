<?php

namespace App\Http\Controllers;

use App\Models\ToolStatus;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ToolStatusController extends Controller
{
    public function checkOutByUserId(Request $request){
        // get user id from request
        // get tool id from request
        // get checkout date find how to save
        Log::debug($request);
        $tool_id = $request['tool_id'];
        $user_id = $request->user()->id;

            $ToolStatus = new ToolStatus;
            $ToolStatus->condition_checkout = "good";
            $ToolStatus->condition_checkin = "good";
            $ToolStatus->user_id = $user_id;
            $ToolStatus->tool_id = $tool_id;
            $ToolStatus->checkout_date = Carbon::now()->toDateTime();
            $ToolStatus->save();


    }

    // checkin
}
