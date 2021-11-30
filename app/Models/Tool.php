<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand;

class Tool extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'brand_id', 'img_url'];

     /**
     * Get the brand that owns the tool.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
