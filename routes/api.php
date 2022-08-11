<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('nagad/pay','App\Http\Controllers\API\NagadPaymentController@pay')->name('nagad.pay');
// Route::get('nagad/callback','App\Http\Controllers\API\NagadPaymentController@callback');

//User Authentication..............................
Route::post('register', 'App\Http\Controllers\API\RegisterController@register');
Route::post('login', 'App\Http\Controllers\API\RegisterController@login')->name('login');
Route::post('logout', 'App\Http\Controllers\API\RegisterController@logout');

//Middleware Protected Route.......................
Route::group(['middleware' => ['auth:sanctum']], function () {
    
    //Profile Information API.............................
    Route::post('profile','App\Http\Controllers\API\ProfileController@index');
    Route::post('profileV2','App\Http\Controllers\API\ProfileController@index_v2');

    
    //Payment API.............................
    Route::get('nagadpayment', 'App\Http\Controllers\API\PaymentControlle@nagadPayment');
    
    //Personal Information API.............................
    Route::post('infos', 'App\Http\Controllers\API\PersonalInfoController@index');
    Route::post('info', 'App\Http\Controllers\API\PersonalInfoController@store');
    Route::post('info/update/{id}', 'App\Http\Controllers\API\PersonalInfoController@update');
    Route::delete('info/delete/{id}', 'App\Http\Controllers\API\PersonalInfoController@destroy');

    //Work Experience API...................................
    Route::post('experiences', 'App\Http\Controllers\API\WorkExperienceController@index');
    Route::post('experience', 'App\Http\Controllers\API\WorkExperienceController@store');
    Route::post('experience/update/{id}', 'App\Http\Controllers\API\WorkExperienceController@update');
    Route::delete('experience/delete/{id}', 'App\Http\Controllers\API\WorkExperienceController@destroy');

    //Education API........................................
    Route::post('educations', 'App\Http\Controllers\API\EducationController@index');
    Route::post('education', 'App\Http\Controllers\API\EducationController@store');
    Route::post('education/update/{id}', 'App\Http\Controllers\API\EducationController@update');
    Route::delete('education/delete/{id}', 'App\Http\Controllers\API\EducationController@destroy');

    //Projects API...........................................
    Route::post('projects', 'App\Http\Controllers\API\ProjectController@index');
    Route::post('project', 'App\Http\Controllers\API\ProjectController@store');
    Route::post('project/update/{id}', 'App\Http\Controllers\API\ProjectController@update');
    Route::delete('project/delete/{id}', 'App\Http\Controllers\API\ProjectController@destroy');

    //Additional Information API..............................
    Route::post('additions', 'App\Http\Controllers\API\AdditionalInfoController@index');
    Route::post('addition', 'App\Http\Controllers\API\AdditionalInfoController@store');
    Route::post('addition/update/{id}', 'App\Http\Controllers\API\AdditionalInfoController@update');
    Route::delete('addition/delete/{id}', 'App\Http\Controllers\API\AdditionalInfoController@destroy');

    //Reference API.............................................
    Route::post('references', 'App\Http\Controllers\API\ReferenceController@index');
    Route::post('reference', 'App\Http\Controllers\API\ReferenceController@store');
    Route::post('reference/update/{id}', 'App\Http\Controllers\API\ReferenceController@update');
    Route::delete('reference/delete/{id}', 'App\Http\Controllers\API\ReferenceController@destroy');
    
    //Training API...........................................
    Route::post('trainings', 'App\Http\Controllers\API\TrainingController@index');
    Route::post('training', 'App\Http\Controllers\API\TrainingController@store');
    Route::post('training/update/{id}', 'App\Http\Controllers\API\TrainingController@update');
    Route::delete('training/delete/{id}', 'App\Http\Controllers\API\TrainingController@destroy');
    
    //InterviewTips API.......................................
    Route::post('interviewtips', 'App\Http\Controllers\API\InterviewTipsController@index');
    
    //Resume download routes..............
    
    Route::get('/resume/download/{id}','App\Http\Controllers\API\ResumeController@apidownload')->name('resume.download');

    });
    
    //Job API....................................................
    Route::post('jobs', 'App\Http\Controllers\API\JobController@index');
    Route::post('job', 'App\Http\Controllers\API\JobController@store');
    
    //CV API.............................................
    Route::get('cv', 'App\Http\Controllers\API\CvController@index');
    
    //Resume download routes..............
    Route::get('/resume', 'App\Http\Controllers\API\ResumeController@index')->name('resume.index');



