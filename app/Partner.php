<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
  protected $casts =['check_list'=>'array',];
  protected $table= 'partners';

    public function users(){
      return $this->belongsTo('App\User');
    }
}
