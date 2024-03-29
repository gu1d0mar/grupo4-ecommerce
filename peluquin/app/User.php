<?php

namespace App;

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
        'username', 'email', 'password','first_name','last_name','nbhd_id','avatar','role','bday',
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

    public function shops(){
        return $this->hasMany('App\Shop','user_id');
    }

    public function comments(){
      return $this->hasMany('App\Comment','user_id');
    }

    public function nbhd(){
      return $this->belongsTo('App\Nbhd','nbhd_id');
    }


    public function getFullName()
    {
      return $this->first_name . ' ' . $this->last_name;
    }


}
