<?php

namespace App\Models\Jobs;

use Illuminate\Database\Eloquent\Model;

class JobRegister extends Model
{

   public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }
    
	protected $fillable = [
        'full_name', 'mobile', 'email', 
        'state_id','jobskill_id'
    ];
    
   public function state()
  	{
   		return $this->belongsTo('App\Models\State\All_state', 'state_id');    	
	  }

	public function skill()
    {
      return $this->belongsTo('App\Models\Jobs\JobSkill', 'jobskill_id');      
    }
}
