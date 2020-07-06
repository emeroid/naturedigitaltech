<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{

     public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }
    
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'mobile', 'address', 
        'img','state','activated',
    ];

    public function user()
  	{
   		return $this->belongsTo('App\Models\User');    	
	}
}
