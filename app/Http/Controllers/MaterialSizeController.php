<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialSizeController extends Controller
{
    public function show(){
        // get all tools, and return the JSON array.
        $materialSize = Material::all();
        $materialSize->load("materials");
        return $materialSize->toArray();
    }
}
