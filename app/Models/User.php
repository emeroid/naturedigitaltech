<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //@return lists Affiliate
    public function affiliate()
    {
        return $this->hasOne('App\Models\Affiliate\Affiliate');
    }

    //@return lists Order
    public function order()
    {
        return $this->hasMany('App\Models\Transaction\Order');
    }

    //@return single referer
    public function referrer()
    {
        return $this->belongsTo('App\Models\User', 'referred_by');
    }

    //@return lists referer
    public function referrals()
    {
        return $this->hasMany('App\Models\user', 'referred_by');
    }
}
