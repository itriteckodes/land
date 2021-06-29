<?php

use GuzzleHttp\Middleware;
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

Route::get('/', function () {
    return view('front.index');
})->name('index');


  Route::get('agents','App\Http\Controllers\AgentController@index')->name('agents');
  Route::get('download','App\Http\Controllers\User\UserController@download')->name('download');
  Route::get('services','App\Http\Controllers\ServiceController@services')->name('services');
  Route::view('about','front.about')->name('about');
  Route::view('contact','front.contact')->name('contact');
  Route::get('maps','App\Http\Controllers\MapController@maps')->name('maps');
  Route::post('contact/store','App\Http\Controllers\ContactController@store')->name('contact_store');
  Route::get('agents/properties/{id}','App\Http\Controllers\AgentController@agentProperty')->name('agent_property');
  Route::post('add/lead','App\Http\Controllers\ContactController@save_lead')->name('save_lead')->middleware('auth');
  Route::get('plots','App\Http\Controllers\PlotController@index')->name('plots');
  Route::get('plot/detail/{id}','App\Http\Controllers\PlotController@details')->name('plot_detail');
  Route::get('property/detail/{id}','App\Http\Controllers\AgentController@property_details')->name('property_detail');
  Route::get('properties','App\Http\Controllers\AgentController@properties')->name('properties');
  Route::get('service/detail/{id}','App\Http\Controllers\ServiceController@service_details')->name('service_detail');
  Route::get('contact/index','App\Http\Controllers\ContactController@index')->name('contact_index')->middleware('auth:admin');
  Route::view('user/login','user.login')->name('user.login');
  Route::view('agent/login','login')->name('agent.login');
  Route::post('login','App\Http\Controllers\AuthController@login')->name('login');

  Route::post('user/register','App\Http\Controllers\User\UserController@store')->name('user.register');
  Route::post('user/login','App\Http\Controllers\User\AuthController@login')->name('user.login');

Route::view('forget/user/password','user.forget');                             

Route::group(['prefix'=> 'user','namespace' => 'App\Http\Controllers\User', 'as' => 'user.'], function () {

  Route::post('send/verfication','UserController@verification')->name('verify');
  Route::post('reset/password','UserController@resetPassword')->name('reset.password');

  Route::group(['middleware' => ['auth'] ], function () {
    Route::get('dashboard','UserController@dashboard')->name('dashboard');
    Route::get('booking/property','TokenController@property')->name('token.property');
    Route::resource('complaint', 'ComplaintController');
    Route::resource('token', 'TokenController');
    
    Route::post('booking/pay', 'TokenController@tokenpay')->name('token.pay');
    Route::post('update_profile', 'UserController@update_profile')->name('update_profile');
    Route::get('update/profile', 'UserController@profile')->name('profile');
    Route::get('services/list', 'ServiceController@index')->name('all_serices');
    Route::get('avail/service/{id}', 'ServiceController@avail')->name('avail_service');
    Route::get('user/services', 'ServiceController@userService')->name('user_service');
    Route::post('services/payment', 'ServiceController@servicepayment')->name('service.payment');
    Route::get('pending/leads','LeadController@pending_leads')->name('pending_leads');
    Route::get('accepted/leads','LeadController@accepted_leads')->name('accepted_leads');
    Route::post('services/pay', 'ServiceController@servicepay')->name('service.pay');
    Route::get('logout', 'AuthController@logout')->name('logout');
  });
});

 Route::group(['prefix'=> 'admin','namespace' => 'App\Http\Controllers\Admin', 'as' => 'admin.'], function () {

Route::group(['middleware' => ['auth:admin'] ], function () {
    
    Route::get('dashboard','AdminController@dashboard')->name('dashboard');
    Route::get('logout','AdminController@logout')->name('logout');
    Route::resource('agent', 'AgentController');
    Route::resource('service', 'ServiceController');
    Route::get('profile','AdminController@profile')->name('profile');                                
    Route::post('update/profile','AdminController@update_profile')->name('update_profile');    
    Route::get('lead/plots','LeadController@plots')->name('lead_plots');                             
    Route::get('lead/properties','LeadController@properties')->name('lead_properties');       
    Route::get('lead/services','LeadController@services')->name('lead_services');  
    Route::resource('employee', 'EmployeeController');     
    Route::post('pay/emplyee', 'EmployeeController@pay_employee')->name('emp.pay');  
    Route::get('payments','EmployeeController@payment_index')->name('payment_index');   
    Route::get('user/complaints','ComplaintController@index')->name('complaint');   
    Route::get('print/{id}','EmployeeController@print')->name('print');   
    Route::get('fulfil/complaint/{id}','ComplaintController@approve')->name('fullfill_complaint');
    Route::get('availed/services/user','ServiceController@fetch')->name('availed_services');
    Route::get('all/users','UserController@index')->name('all_users');
    Route::get('delete/user/{id}','UserController@delete_user')->name('delete_user');
    Route::get('user/plots/{id}','UserController@user_plots')->name('user_plots');
    Route::get('user/properties/{id}','UserController@user_properties')->name('user_properties');

    Route::get('sold/properties','SoldController@sold_properties')->name('sold_props');
    Route::get('sold/plots','SoldController@sold_plots')->name('sold_plots');

    Route::get('agent/properties/{id}','AgentController@agent_properties')->name('agent_properties');
    Route::get('agent/plots/{id}','AgentController@agent_plots')->name('agent_plots');
  });
});



Route::view('forget/password','agent.forget');                             

Route::group(['prefix'=> 'agent','namespace' => 'App\Http\Controllers\Agent', 'as' => 'agent.'], function () {
  Route::post('send/verfication','AgentController@verification')->name('verify');
  Route::post('reset/password','AgentController@resetPassword')->name('reset.password');
Route::group(['middleware' => ['auth:agent'] ], function () {
  
    Route::get('dashboard','AgentController@dashboard')->name('dashboard');
    Route::get('logout','AgentController@logout')->name('logout');
    Route::resource('property', 'PropertyController');
    Route::resource('plot', 'PlotController');    
    Route::get('profile','AgentController@profile')->name('profile');                                
    Route::post('update/profile','AgentController@update_profile')->name('update_profile');   
    Route::get('lead/plots','LeadController@plots')->name('lead_plots');                             
    Route::get('pending/lead/plots','LeadController@pend_plot_leads')->name('lead_plots_pending');                             
    Route::get('pending/lead/properties','LeadController@pend_prop_leads')->name('lead_prop_pending');                             
    Route::get('lead/properties','LeadController@properties')->name('lead_properties');     
    Route::get('lead/property/accept/{id}/{lid}','LeadController@property_accept')->name('lead_prop_accept');     
    Route::get('lead/plot/accept/{id}/{lid}','LeadController@plot_accept')->name('lead_plot_accept');     
     Route::get('token','PlotController@tokens')->name('token.index');                             

});
});
