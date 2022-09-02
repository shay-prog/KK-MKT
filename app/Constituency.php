<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
  PROTECTED $table = 'constituencies';
public function counties(){
  return $this->belongsTo('App\County');
}
}
