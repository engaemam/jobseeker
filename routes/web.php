<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
 Route::get('/',['uses'=>'JobController@Home','as'=>'home.index']);
 Route::group(['middleware'=>'auth'], function () {                     
    Route::get('/account/delete/{id}',['uses'=>'AccountController@destroy','as'=>'account.delete']);
    Route::get('/account/edit/{id}',['uses'=>'AccountController@edit','as'=>'account.edit']);
    Route::get('/account/show',['uses'=>'AccountController@show','as'=>'account.show']);
    Route::get('/account/create',['uses'=>'AccountController@create','as'=>'account.create']);
    Route::post('/account/update',['uses'=>'AccountController@update','as'=>'account.update']);
    Route::post('/account/add',['uses'=>'AccountController@store','as'=>'account.store']);
    Route::get('/job/apply/{id}',['uses'=>'JobController@Apply','as'=>'job.apply']);
    Route::get('/resume/{resume}',['uses'=>'MinistryController@resume','as'=>'resume.show']);
    Route::get('/user/application',['uses'=>'JobController@MyJobs','as'=>'app.show']);


});
    Route::get('/job/{id}',['uses'=>'JobController@show','as'=>'job.show']);
    Route::get('/ministry/show/{id}',['uses'=>'MinistryController@show','as'=>'ministry.show']);
    Route::get('/ministry/{id}',['uses'=>'MinistryController@jobs','as'=>'ministry.jobs']);
    Route::get('/jobs',['uses'=>'JobController@index','as'=>'job.index']);
    Route::post('/search',['uses'=>'JobController@search','as'=>'jobs.search']);
    Route::get('/ministries',['uses'=>'MinistryController@index','as'=>'ministry.index']);


Route::group(['middleware'=>'admin'], function () {
    Route::get('/ministry/delete/{id}',['uses'=>'MinistryController@destroy','as'=>'ministry.delete']);
    Route::get('/ministry/edit/{id}',['uses'=>'MinistryController@edit','as'=>'ministry.edit']);
    Route::post('/ministry/update',['uses'=>'MinistryController@update','as'=>'ministry.update']);
    Route::post('/ministryadd',['uses'=>'MinistryController@store','as'=>'ministry.store']);
    Route::get('/createministry',['uses'=>'MinistryController@create','as'=>'ministry.create']);
    Route::get('/accounts',['uses'=>'AccountController@index','as'=>'account.index']);



});

Route::group(['middleware'=>'ministryadmin'], function () {
	Route::get('/job/edit/{id}',['uses'=>'JobController@edit','as'=>'job.edit']);
    Route::get('/createjob',['uses'=>'JobController@create','as'=>'job.create']);
    Route::get('/job/delete/{id}',['uses'=>'JobController@destroy','as'=>'job.delete']);
    Route::get('/posted',['uses'=>'JobController@posted','as'=>'job.posted']);    
    Route::post('/job/update',['uses'=>'JobController@update','as'=>'job.update']);
    Route::post('/job/add',['uses'=>'JobController@store','as'=>'job.store']);
    Route::get('/job/users/{id}',['uses'=>'JobController@JobUsers','as'=>'job.applicants']);
    Route::get('/profile/{id}',['uses'=>'AccountController@viewAccount','as'=>'account.view']);


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
