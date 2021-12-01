<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToolStatus extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'tool_id','condition_checkout',
    'condition_checkin','user_id','checkout_date','checkin_date' ];
    public function tool()
    {
        return $this->belongsTo(Tool::class);
    }
}
