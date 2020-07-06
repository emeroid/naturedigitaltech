<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Model;

class Online extends Model
{

	 public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }

    
    protected $fillable = [
        'subject', 'location', 'body'
    ];
}
