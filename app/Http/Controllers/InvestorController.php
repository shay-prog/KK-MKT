<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\facades\Auth;

class InvestorController extends Controller
{
  public function investors($in){
    if(Auth::check()){
      return $in;
    }
    else{
      return view('investorauth');
    }
  }

  public function logininvestor(){
    return view('logininvestor');
  }
  public function signupinvestor(){
    return view('signupinvestor');
  }
}
