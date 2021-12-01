<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function show(){
        // get all tools, and return the JSON array.
        $tools = Tool::all();
        return $tools->toArray();
    }
}
