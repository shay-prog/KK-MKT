<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\County;
use App\Constituency;
use App\Bird;
use App\Age;
use Redirect;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\DB;
class OrdersController extends Controller
{
    public function orders(Request $request){
      if(Auth::check()){
          $counties = County::all('countyName');
          $birds = Bird::all('age');
          $ch ="chicks";
          //return $request->input('action');
        //  $constituencies = Constituency::find('constituency');
          return view('orders',compact('counties','constituencies','birds','user','ch'));

    }
    else{
      return redirect()->route('loginmain');
    }
  }

    public function orderStore(Request $request,$ch){
      switch ($request->input('action')) {
        case 'submit':
          $user = Auth::user()->fullname;
          $countyName= $request->input('county');
          $constituency=$request->input('constituency');
          $town = $request->input('town');
          $idNumber = $request->input('idNumber');
          $contact= $request->input('contact');
          $age = $request->input('age');
          $numberOfBirds =$request -> input('numberOfBirds');
          $date = $request->input('Date');
          $orderType =$ch;
          $data =array('name'=>$user,'county'=>$countyName,'constituency'=>$constituency,'town'=>$town,'IDnumber'=>$idNumber,
          'contact'=>$contact,'age'=>$age,'numberOfBirds'=>$numberOfBirds,'date'=>$date,'orderType'=>$orderType);
          DB::table('orders')->insert($data);
          return redirect()->route('turkeys');
          break;

        case 'cancel':
          return redirect()->route('orders');
          break;
      }

    }
    public function county(){
      return view('county');
    }
    public function countyStore(Request $request){
      switch ($request->input('action')) {
        case 'submit':
        $countyNumber = $request->input('countyNumber');
        $countyName= $request->input('countyName');
        $data =array('id'=>$countyNumber,'countyName'=>$countyName);
        DB::table('counties')->insert($data);
        return redirect()->route('constituency');

          break;

        case 'cancel':
          return redirect()->route('county');
          break;
      }

    }
    public function constituency(){
      return view('constituency');
    }
    public function constituencyStore(Request $request){
    //  return $request->input('action');
      switch ($request->input('action')) {
        case 'submit':
          $constituencyNumber= $request->input('constituencyNumber');
          $county_name= $request->input('county_name');
          $constituencyName= $request->input('constituencyName');
          $data= array('id'=>$constituencyNumber,'county_name'=>$county_name,'constituencyName'=>$constituencyName);
          DB::table('constituencies')->insert($data);
          return redirect()->route('constituency');
          break;

        case 'cancel':
          return redirect()->route('constituency');
          break;
      }

    }

    public function findConstituency(Request $request){
      $data=Constituency::select('id','constituencyName')->where('county_name',$request->id)->take(100)->get();
    // return $data;
     return response()->json($data);
    }
    public function age(){
      return view('birds');
    }
    public function ageStore(Request $request){
      switch ($request->input('action')) {
        case 'submit':
          $idNumber = $request->input('idNumber');
          $age = $request->input('age');
          $data = array('id'=>$idNumber,'age'=>$age);
          DB::table('birds')->insert($data);
          return redirect()->route('age');
          break;

        case 'cancel':
          return redirect()->route('age');
          break;
      }

    }
    public function logout1(Request $resquest){
      Auth::logout();
      return redirect('loginmain');

    }
    public function eggsOrder(Request $request){
      if(Auth::check()){
        $counties = County::all('countyName');
        $birds = Bird::all('age');
        //return $request->input('action');
        switch ($request->input('action')) {
          case 'order1':
            $n="KroilersF1";
            return view('eggsOrder',compact('counties','constituencies','birds','user','n'));
            break;

          case 'order2':
          $n = "KroilersF2";
            return view('eggsOrder',compact('counties','constituencies','birds','user','n'));
            break;
            case 'order3':
            $n = "Kenbro Fertized";
              return view('eggsOrder',compact('counties','constituencies','birds','user','n'));
              break;
              case 'order4':
              $n = "Unfertized consumable";
                return view('eggsOrder',compact('counties','constituencies','birds','user','n'));
                break;
                case'chicks':
                $ch ="chicks";
                return redirect()->route('orders');
                break;
                case'krcork':
                $n="Kroilers Cork";
                return view('chickenOrder',compact('counties','constituencies','birds','user','n'));
                break;

                case'krhen':
                  $n="Kroilers hen";
                return view('chickenOrder',compact('counties','constituencies','birds','user','n'));
                break;

                case'kcork':
                  $n="Kienyeji Cork";
                  return view('chickenOrder',compact('counties','constituencies','birds','user','n'));
                break;
                case'khen':
                  $n="Kienyeji hen";
                  return view('chickenOrder',compact('counties','constituencies','birds','user','n'));
                break;
                case'broilors':
                $n="Broilors";
                return view('broilorsOrder',compact('counties','constituencies','birds','user','n'));
                break;

                case 'manure':
                $n = "manure";
                return view('manureOrder',compact('counties','constituencies','birds','user','n'));
                break;

                case 'chicken':
                $n='incubation of chicken,guise or Quels  ';
                return view('incubationOrder',compact('counties','constituencies','birds','user','n'));
                break;
                case 'turkey':
                $n='incubation of Turkeys ';
                return view('incubationOrder',compact('counties','constituencies','birds','user','n'));
                break;
                case 'duck':
                $n='incubation of Ducks ';
                return view('incubationOrder',compact('counties','constituencies','birds','user','n'));
                break;
                case 'guinea':
                $n='incubation of Guinea Fowls ';
                return view('incubationOrder',compact('counties','constituencies','birds','user','n'));
                break;
        }

      }
      else{
        return view('loginmain');
      }
    }
    public function eggsOrderStore(Request $request,$n){
      switch ($request->input('action')) {
        case 'submit':
        $user = Auth::user()->fullname;
        $county = $request->input('county');
        $constituency = $request->input('constituency');
        $town = $request->input('town');
        $idNumber = $request->input('idNumber');
        $contact =$request->input('contact');
        $capacity = $request->input('capacity');
        $age =$request->input('age');
        $numberOfBirds =$request->input('numberOfBirds');
        $numberOfEggs = $request->input('numberOfEggs');

        $date =$request->input('Date');

      //  return view::make('eggs incubation')->with('message','You have suucessfully booked incubation');
      //  return Redirect::to('eggs incubation')->with('succcess',true)->with('message','You have suucessfully booked incubation');
        $orderType =$n;
        $data =array('name'=>$user,'county'=>$county,'constituency'=>$constituency,'town'=>$town,'IDnumber'=>$idNumber,
        'contact'=>$contact,'capacity'=>$capacity,'age'=>$age,'numberOfBirds'=>$numberOfBirds,'numberOfEggs'=>$numberOfEggs,'date'=>$date, 'orderType'=>$orderType);
        DB::table('orders')->insert($data);

      return redirect()->back()->with('alert','Order Successful');

          break;

        case 'cancel':
          return redirect()->back()->with('alert','The order has been cancelled');
          break;
      }



    }
    public function incubation(){
      return view('incubation',compact('counties','constituencies','birds','user','n'));
    }
}
