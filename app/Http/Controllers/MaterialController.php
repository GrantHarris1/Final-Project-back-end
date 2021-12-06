<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function show(){
        // get all tools, and return the JSON array.
        $materials = Material::all();
        return $materials->toArray();
    }
}
