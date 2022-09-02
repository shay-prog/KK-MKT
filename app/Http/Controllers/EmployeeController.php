<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\facades\Auth;
use App\User;
use App\Employee;
use App\County;

class EmployeeController extends Controller
{
  public function employees(Request $request,$emp){
    $credentials =$request->only('email','password');
    if(Auth::attempt($credentials)){
      return $emp;
      $counties = County::all('countyName');
      $user = Auth::user()->fullname;
      $employee = Employee::get('fullname');
      return $employee;
      if($user == $employee){
        return view('employeeHome');
      }
      else{
        return view('registerEmployee',compact('counties'));
      }

    }
    else{
      //return $emp;
      return view('employeeauth');
    }
  }

  public function loginemployee(){
    return view('loginemployee');
  }
  public function signupemployee(){
    return view('signupemployee');
  }
  public function registerEmployee(Request $request){
    switch ($request->input('action')) {
      case 'submit':
      $user = Auth::user()->fullname;
      $countyName= $request->input('county');
      $constituency=$request->input('constituency');
      $town = $request->input('town');
      $idNumber = $request->input('idNumber');
      $contact= $request->input('contact');
      $gender = $request->input('gender');
      $data =array('fullname'=>$user,'county'=>$countyName,'constituency'=>$constituency,'town'=>$town,'IDnumber'=>$idNumber,
      'contact'=>$contact,'gender'=>$gender);
      DB::table('employees')->insert($data);
        break;

        case 'cancel':

          break;

      default:
        // code...
        break;
    }
  }
}
