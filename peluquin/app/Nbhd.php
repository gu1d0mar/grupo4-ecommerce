<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nbhd extends Model
{
    
    protected $fillable = [
      'name', 'postal_code',
    ];

    public function shops(){
      return $this->hasMany('App\Shop','nbhd_id');
    }
}
