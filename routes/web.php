<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('alphatech','AlphaController@alphatech')->name('alphatech');
Route::get('eggs','AlphaController@eggs')->name('eggs');
Route::get('manure','AlphaController@manure')->name('manure');
Route::get('kienyeji','AlphaController@kienyeji')->name('kienyeji');
Route::get('broilors','AlphaController@broilors')->name('broilors');


//poultry routes
Route::get('kuku','AlphaController@kuku')->name('kuku');
Route::get('turkeys','AlphaController@turkeys')->name('turkeys');
Route::get('geese','AlphaController@geese')->name('geese');
Route::get('ducks','AlphaController@ducks')->name('ducks');
Route::get('guinea','AlphaController@guinea')->name('guinea');
Route::get('quils','AlphaController@quils')->name('quils');
route::get('loginmain','AlphaController@login')->name('loginmain');
route::get('signupmain','AlphaController@signup')->name('signupmain');
//investor login and signup
Route::get('logininvestors','InvestorController@logininvestors')->name('logininvestors');
route::get('sign up investor','InvestorController@signupinvestor')->name('signupinvestor');
//partner login and signup
route::get('loginpartner','PartnerController@loginpartner')->name('loginpartner');
route::get('sign up partner','PartnerController@signuppartner')->name('signuppartner');
//employee login and signup
route::get('loginemployee','EmployeeController@loginemployee')->name('loginemployee');
route::get('sign up employee','EmployeeController@signupemployee')->name('signupemployee');

Route::post('Register','AlphaController@register')->name('Register');
Route::Post('authenticate','loginController@authenticate')->name('authenticate');
Route::get('login user','loginController@loginUser')->name('loginUser');
Route::Post('authenticate investor','loginController@authenticateInvestor')->name('authenticateinvestor');
Route::Post('authenticate employee','loginController@authenticateEmployee')->name('authenticateEmployee');
Route::Post('authenticate partner','loginController@authenticatePartner')->name('authenticatePartner');
Route::get('login investor','loginController@loginInvestor')->name('loginInvestor');
Route::get('login partner','loginController@loginPartner')->name('loginPartner');


//orders routes
Route::get('orders','OrdersController@orders')->name('orders');
Route::post('orders store/{ch}','OrdersController@orderStore')->name('orderStore');
Route::get('county registration','OrdersController@county')->name('county');
Route::get('constituency registration','OrdersController@constituency')->name('constituency');
Route::post('county Store','OrdersController@countyStore')->name('countyStore');
Route::post('constituency Store','OrdersController@constituencyStore')->name('constituencyStore');
Route::get('findConstituency','OrdersController@findConstituency')->name('findConstituency');
Route::get('age','OrdersController@age')->name('age');
Route::post('agestore','OrdersController@ageStore')->name('ageStore');
Route::get('logout1','OrdersController@logout1')->name('logout1');
Route::get('eggs orders','OrdersController@eggsOrder')->name('eggsOrder');
Route::post('eggs order store/{n}','OrdersController@eggsOrderStore')->name('eggsOrderStore');
Route::get('chicken orders','OrdersController@eggsOrder')->name('eggsOrder');

//incubation.
Route::get('eggs incubation','OrdersController@incubation')->name('incubation');



//Career points routes
Route::get('invest with alphapoultry/{in}','InvestorController@investors')->name('investors');
Route::get('partner with alpha poultry/{pa}','PartnerController@partners')->name('partners');
Route::get('become alphs poultry employee/{emp}','EmployeeController@employees')->name('employees');
Route::get('work with us','AlphaController@careers')->name('careers');

//partner route
Route::Post('register partner','PartnerController@registerPartner')->name('registerPartner');
Route::get('partners home','PartnerController@partnerHome')->name('partnerHome');

//employee routes
Route::Post('register employee','EmployeeController@registerEmployee')->name('registerEmployee');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'AlphaController@login')->name('home');
