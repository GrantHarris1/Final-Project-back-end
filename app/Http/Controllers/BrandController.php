<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function show(){
        // get all tools, and return the JSON array.
        $brands = Brand::all();
        $brands->load("tools");
        return $brands->toArray();
    }
}
