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
  Route::get('services','App\Http\Controllers\ServiceController@services')->name('services');
  Route::view('about','front.about')->name('about');
  Route::view('contact','front.contact')->name('contact');
  Route::get('maps','App\Http\Controllers\MapController@maps')->name('maps');
  Route::post('contact/store','App\Http\Controllers\ContactController@store')->name('contact_store');
  Route::get('agents/properties/{id}','App\Http\Controllers\AgentController@agentProperty')->name('agent_property');
  Route::post('add/lead','App\Http\Controllers\ContactController@save_lead')->name('save_lead');
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

Route::group(['prefix'=> 'user','namespace' => 'App\Http\Controllers\User', 'as' => 'user.'], function () {

  Route::group(['middleware' => ['auth'] ], function () {
    Route::get('dashboard','UserController@dashboard')->name('dashboard');
    Route::resource('complaint', 'ComplaintController');
    Route::post('update_profile', 'UserController@update_profile')->name('update_profile');
    Route::get('update/profile', 'UserController@profile')->name('profile');
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
  });
});


Route::group(['prefix'=> 'agent','namespace' => 'App\Http\Controllers\Agent', 'as' => 'agent.'], function () {
  
Route::group(['middleware' => ['auth:agent'] ], function () {
  
    Route::get('dashboard','AgentController@dashboard')->name('dashboard');
    Route::get('logout','AgentController@logout')->name('logout');
    Route::resource('property', 'PropertyController');
    Route::resource('plot', 'PlotController');    
    Route::get('profile','AgentController@profile')->name('profile');                                
    Route::post('update/profile','AgentController@update_profile')->name('update_profile');   
    Route::get('lead/plots','LeadController@plots')->name('lead_plots');                             
    Route::get('lead/properties','LeadController@properties')->name('lead_properties');                             

});
});
