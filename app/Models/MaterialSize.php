<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Material;
class MaterialSize extends Model
{
    use HasFactory;
    protected $fillable = ['name'];


    //protected $with = ['tools'];
    public function materials()
    {
        return $this->hasMany(Material::class);
    }
}
