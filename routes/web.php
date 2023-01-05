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



//Admin Panel..................

Route::get('/admin', function () {
    return redirect('/admin/login');
});

Route::post('/admin/dashboard', 'App\Http\Controllers\Admin\AdminController@dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/users', 'App\Http\Controllers\Admin\AdminController@allUser');
    Route::get('/personal-info', 'App\Http\Controllers\Admin\AdminController@personalInfo');
    Route::get('/payments', 'App\Http\Controllers\Admin\AdminController@payments');
    Route::get('/additional-info', 'App\Http\Controllers\Admin\AdminController@additionalInfo');
    Route::get('/educations', 'App\Http\Controllers\Admin\AdminController@educations');
    Route::get('/projects', 'App\Http\Controllers\Admin\AdminController@projects');
    Route::get('/references', 'App\Http\Controllers\Admin\AdminController@references');
    Route::get('/trainings', 'App\Http\Controllers\Admin\AdminController@trainings');
    Route::get('/experiences', 'App\Http\Controllers\Admin\AdminController@experiences');
    Route::get('/search/{page?}', 'App\Http\Controllers\Admin\AdminController@search');

    //Admin Authentication...........................................................
    Route::get('/admins', 'App\Http\Controllers\Admin\AdminController@allAdmin');
    Route::get('/login', 'App\Http\Controllers\Admin\AdminController@adminLogin');
    Route::get('/logout', 'App\Http\Controllers\Admin\AdminController@adminLogout');

    //Interview Tips Route...........................................................
    Route::get('/add-tips', 'App\Http\Controllers\Admin\AdminController@index_tips');
    Route::get('/all-tips', 'App\Http\Controllers\Admin\AdminController@all_tips');
    Route::post('/save-tips', 'App\Http\Controllers\Admin\AdminController@save_tips');
    Route::get('/edit-tips/{id}', 'App\Http\Controllers\Admin\AdminController@edit_tips');
    Route::post('/update-tips/{id}', 'App\Http\Controllers\Admin\AdminController@update_tips');
    Route::get('/delete-tips/{id}', 'App\Http\Controllers\Admin\AdminController@delete_tips');

    //Suggetions Route...........................................................
    Route::get('/add-suggetions', 'App\Http\Controllers\Admin\AdminController@index_suggetions');
    Route::get('/all-suggetions', 'App\Http\Controllers\Admin\AdminController@all_suggetions');
    Route::post('/save-suggetions', 'App\Http\Controllers\Admin\AdminController@save_suggetions');
    Route::get('/edit-suggetions/{id}', 'App\Http\Controllers\Admin\AdminController@edit_suggetions');
    Route::post('/update-suggetions/{id}', 'App\Http\Controllers\Admin\AdminController@update_suggetions');
    Route::get('/delete-suggetions/{id}', 'App\Http\Controllers\Admin\AdminController@delete_suggetions');

    //Job Circular Route...........................................................
    Route::get('/add-jobs', 'App\Http\Controllers\Admin\AdminController@index_jobs');
    Route::get('/all-jobs', 'App\Http\Controllers\Admin\AdminController@all_jobs');
    Route::post('/save-jobs', 'App\Http\Controllers\Admin\AdminController@save_jobs');
    Route::get('/edit-jobs/{id}', 'App\Http\Controllers\Admin\AdminController@edit_jobs');
    Route::post('/update-jobs/{id}', 'App\Http\Controllers\Admin\AdminController@update_jobs');
    Route::get('/delete-jobs/{id}', 'App\Http\Controllers\Admin\AdminController@delete_jobs');

    //Report Generator Route...........................................................
    Route::get('/user-pdf-report', 'App\Http\Controllers\Admin\AdminController@userReportPDF');
    Route::get('/user-excel-report', 'App\Http\Controllers\Admin\AdminController@userReportExcel');
    Route::get('/payment-pdf-report', 'App\Http\Controllers\Admin\AdminController@paymentReportPDF');
    Route::get('/payment-excel-report', 'App\Http\Controllers\Admin\AdminController@paymentReportExcel');
});
