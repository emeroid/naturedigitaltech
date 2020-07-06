<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Model;

class RequestSkill extends Model
{
	 public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }
    
    protected $fillable = [
        'full_name', 'mobile', 'email', 
        'state','skill','msg'
    ];
}
