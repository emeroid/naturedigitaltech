<?php

namespace App\Models\Training;

use Illuminate\Database\Eloquent\Model;

class CourseRegister extends Model
{

   public function scopeLatestFirst($query)
    {

       $query->orderBy('updated_at','desc');
    }
    
    //
    protected $fillable = [
        'full_name', 'mobile', 'email', 
        'state_id','jobskill_id'
    ];

  public function state()
  	{
   		return $this->belongsTo('App\Models\State\All_state');    	
	  }

	public function skill()
    {
      return $this->belongsTo('App\Models\Jobs\JobSkill', 'jobskill_id');      
    }
}
