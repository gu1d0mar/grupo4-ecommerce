<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{   public $table = "shops";
    protected $fillable = [
      'email','name','adress','work_hours','password',
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

    public function nbhd(){
      return $this->belongsTo('App\Nbhd','nbhd_id');
    }

    public function getStarsAttribute(){
      return round($this->rating);
    }
}
