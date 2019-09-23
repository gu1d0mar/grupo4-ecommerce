<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'name','description','price','shop_id',
    ];

    public function shop(){
      return $this->belongsTo('App\Shop', 'shop_id');
    }
}
