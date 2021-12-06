<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MaterialSize;

class Material extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type', 'size'];

    protected $with = ['size'];
     /**
     * Get the brand that owns the tool.
     */
    public function size()
    {
        return $this->hasOne(MaterialSize::class, "id", "size");
    }
}
