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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('/','mainController');
Route::resource('/project','projectController');
Route::get('/dashboard', 'projectController@dashbrod')->name('dashboard');
Route::get('/login', 'projectController@login')->name('login');
Route::get('/myProject', 'projectController@myProject')->name('myProject');
Route::get('/freelancer', 'projectController@freelancer')->name('freelancer');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
