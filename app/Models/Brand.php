<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tool;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

     /**
     * Get the tools for the brand.
     */
    public function tools()
    {
        return $this->hasMany(Tool::class);
    }
}
