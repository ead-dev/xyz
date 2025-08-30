<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('clients',[ClientController::class,'index']);
//Route::resource('clients','')

Route::namespace('App\Http\Controllers')
        ->group(function(){
            Route::resource('clients','ClientController')->middleware('auth');
            Route::resource('users','UserController')->middleware('auth');
            Route::get('/home','DashboardController@index');

            Route::get('/deconnecter','DashboardController@deconnecter')->middleware('auth');
        });
