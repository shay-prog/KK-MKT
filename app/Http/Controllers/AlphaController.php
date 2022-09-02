<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class AlphaController extends Controller
{
    public function alphatech(){
      return view('index');
    }
    public function eggs(){
      return view('eggs');
    }
    public function manure(){
      return view('manure');
    }
    public function kienyeji(){
      return view('kienyeji');
    }
    public function broilors(){
      return view('broilors');
    }
    public function kuku(){
      return view('kuku');
    }
    public function turkeys(){
      return view('turkeys');
    }
    public function geese(){
      return view('geese');
    }
    public function ducks(){
      return view('ducks');
    }
    public function guinea(){
      return view('guinea');
    }
    public function quils(){
      return view('quils');
    }
    public function login(Request $request){
      if(Auth::check()){
        switch ($request->input('action')) {
          case 'chicks':
            return redirect()->route('orders');
            break;

          default:
            // code...
            break;
        }


      }
      else{
      return view('loginmain');
      }
    }
    public function signup(){
      return view('signupmain');
    }
//investor functions

    //partner functions

    //employee functions
    public function register(Request $request){
      switch ($request->input('action')) {
        case 'Register':
          $fullname=$request->input('fullname');
          $email = $request->input('email');
          $password = $request->input('password');
        //  'password' => Hash::make(),
          $data=array('fullname'=>$fullname,'email'=>$email,'password'=>Hash::make($password));
          DB::table('users')->insert($data);
          return redirect()->route('loginmain');

          //return $request;
          break;
          case 'facebook':
          return $request;
          break;
      }



    }
    public function authenticate(Request $request){
      //$credentials =$request->all('email','password');
      $email =$request->input('email');
      $password = $request->input('password');
      //return $credentials;
      if(Auth::attempt(['email'=>$email,'password'=>$password])){
        return $password;

        $request->session()->regenerate();
        return redirect()->route('signupmain');
      }
      else
      return redirect()->route('signupmain');

    }


}
