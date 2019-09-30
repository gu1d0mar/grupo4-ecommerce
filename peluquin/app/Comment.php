<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
    'user_id', 'shop_id','comment','rating',
  ];

  protected $appends = [
    'stars',
  ];

  public function shop(){
    return $this->belongsTo('App\Shop','shop_id');
  }

  public function user(){
    return $this->belongsTo('App\User','user_id');
  }

  public function getStarsAttribute(){
    return round($this->rating);
  }
}
