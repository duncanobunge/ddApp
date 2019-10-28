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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/','GetDiagnosisController@home');
Route::get('/create', function(){
    return view('create');
});
Route::get('/diagnosis', function(){
    return view('diagnosis_resultpage');
});
Route::post('/insert','GetDiagnosisController@getdiagnosis');
Route::get('/update/{id}','GetDiagnosisController@update');
Route::get('/validatediagnoses/{id}','GetDiagnosisController@validatediagnoses');
Route::post('/edit/{id}','GetDiagnosisController@edit');
Route::post('/editdiagnoses/{id}','GetDiagnosisController@editdiagnoses');
Route::get('/read/{id}','GetDiagnosisController@read');
Route::get('/delete/{id}','GetDiagnosisController@delete');
Route::get('/getdata','GetDiagnosisController@getdata');
Route::get('/diagnosis','GetDiagnosisController@getdiagnosesdata');
Route::get('/deletediagnoses/{id}','GetDiagnosisController@deletediagnoses');
