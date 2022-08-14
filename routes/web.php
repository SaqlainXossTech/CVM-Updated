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

Route::get('/', function () {
    return view('welcome');
});

Route::get('nagad/pay','App\Http\Controllers\NagadPaymentController@pay')->name('nagad.pay');
Route::get('nagad/callback','App\Http\Controllers\NagadPaymentController@callback');

Route::get('get-support-id',function(){
    $sid = NagadPayment::tnxID(1)
                 ->amount(100)
                 ->getSupportID();

    return $sid;
});


//Resume download routes..............
//Route::get('/resume', 'App\Http\Controllers\API\ResumeController@index')->name('resume.index');
//Route::get('/resume/download','App\Http\Controllers\API\ResumeController@download')->name('resume.download');


//view cv & resume show...............
Route::get('/resume/{id}/{num}', 'App\Http\Controllers\API\ResumeController@resume');
Route::get('/view_cv/{mobile}', 'App\Http\Controllers\API\ResumeController@view');



//Payment Routes for bKash
Route::post('token', 'App\Http\Controllers\PaymentController@token')->name('token');
Route::get('createpayment', 'App\Http\Controllers\PaymentController@createpayment')->name('createpayment');
Route::get('executepayment', 'App\Http\Controllers\PaymentController@executepayment')->name('executepayment');
