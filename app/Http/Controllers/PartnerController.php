<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Partner;
use App\County;

class PartnerController extends Controller
{
  public function partners($pa){

    if(Auth::check()){
      $user = json_encode(Auth::user()->fullname);
      $partner = DB::table('partners')->where('name',$user);
      if(!$partnerr){
        return view('partnerHome');
      }
      else{
        $counties = County::all();
        return view('loginpartner',compact('counties'));

      }

    }
    else {
      //$partner = $pa;
      return view('partnerauth');
    }

  }

  public function loginpartner($partner){
    return view('loginpartner');
  }
  public function signuppartner(){
    return view('signuppartner');
  }

    public function registerPartner(Request $request){
      switch ($request->input('action')) {
        case 'submit':
        $user = Auth::user()->fullname;
        $county = $request->input('county');
        $constituency = $request->input('constituency');
        $town = $request->input('town');
        $idNumber = $request->input('idNumber');
        $contact =$request->input('contact');
       $check_list = json_encode($request->input('check_list'));
      // return $check_list;
        $data =array('name'=>$user,'county'=>$county,'constituency'=>$constituency,'town'=>$town,'IDnumber'=>$idNumber,
        'contact'=>$contact,'check_list'=>$check_list);

        DB::table('partners')->insert($data);
          return redirect()->route('partnerHome');

          break;
          case 'cancel':
          return redirect()->back()->with('alert','Partner registration has been cancelled');
          break;

      }

    }
    public function partnerHome(){
      return view('partnerHome');
    }
}
