<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use App\County;
use App\Employee;

class loginController extends Controller
{
    public function authenticate(Request $request){
        //return $request->input('action');
      $credentials =$request->only('email','password');
      if(Auth::attempt($credentials)){
        return redirect()->route('loginUser');
      }
      else
      return back()->withErrors(['email'=>'the provided credential do not match our records']);

    }
    public function loginUser(){
      return view('login1');
    }

    public function authenticateInvestor(Request $request){
      $credentials =$request->only('email','password');
      if(Auth::attempt($credentials)){
        return redirect()->route('loginInvestor');
      }
      else
      return back()->withErrors(['email'=>'the provided credential do not match our records']);

    }
    public function loginInvestor(){
      return view('loginInvestor');
    }
    public function authenticatePartner(Request $request){
      $credentials =$request->only('email','password');
      if(Auth::attempt($credentials)){
        return redirect()->route('loginPartner');
      }
      else
      return back()->withErrors(['email'=>'the provided credential do not match our records']);

    }
    public function loginPartner(){
      $counties = County::all('countyName');
      return view('loginPartner',compact('counties'));
    }

    public function authenticateEmployee(Request $request){
      $credentials =$request->only('email','password');
      if(Auth::attempt($credentials)){
        $employee = Employee::get('fullname');
        return $employee;

        return view('loginEmployee');
      }
      else
      return back()->withErrors(['email'=>'the provided credential do not match our records']);

    }
}
