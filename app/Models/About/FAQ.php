<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{

	 public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }
    
    protected $fillable = [
        'q', 'a'
    ];
}
