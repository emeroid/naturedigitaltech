<?php

namespace App\Models\State;

use Illuminate\Database\Eloquent\Model;

class All_state extends Model
{
    public function courseRegister()
    {
        return $this->hasOne('App\Models\Training\courseRegister');
    }

    public function jobRegister()
    {
        return $this->hasOne('App\Models\Jobs\JobRegister');
    }
}
