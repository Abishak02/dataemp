<?php

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


Route::get('index', function () {
    return view('welcome');
});

Route::post('formsumit', 'App\Http\Controllers\practController@formsumit');
Route::get('reg_details_index','App\Http\Controllers\practController@index_details');
Route::get('reg_view','App\Http\Controllers\practController@get_registration');
Route::get('edit_registration_details/{id}','App\Http\Controllers\practController@edit_empoye_reg');
Route::post('edit_student_reg_update','App\Http\Controllers\practController@edit_student_reg_update');
Route::get('registration_remove/{id}','App\Http\Controllers\practController@student_delete');