<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Model;

class Offline extends Model
{

	 public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }
    
    
    protected $fillable = [
        'subject', 'start_date', 'end_date', 
        'location', 'body','contact',
    ];
}
