<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
  protected $table= 'counties';
public function constituencies(){
return $this->hasMany('App\Constituency');
}
}
