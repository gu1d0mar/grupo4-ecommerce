<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{   public $table = "shops";
    protected $fillable = [
      'email','name','adress','opens_at','closes_at','password','logo','nbhd_id','user_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = [
      'stars',
    ];

    public function products(){
        return $this->hasMany('App\Product','shop_id');
    }

    public function category(){
      return $this->hasManyThrough('App\Category', 'App\Product');
    }

    public function nbhd(){
      return $this->belongsTo('App\Nbhd','nbhd_id');
    }

    public function owner(){
      return $this->belongsTo('App\User','user_id');
    }

    public function getStarsAttribute(){
      return round($this->rating);
    }
}
