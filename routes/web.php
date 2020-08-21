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
//    return view('php');
//});

Route::resource('/','mainController');
//Route::resource('/project','projectController');
Route::resource('/projecto','ProjectoController')->names('project');
Route::get('/dashboard', 'projectController@dashbrod')->name('dashboard');
Route::get('/login', 'projectController@login')->name('login');
Route::get('/myProject', 'projectController@myProject')->name('myProject');
Route::get('/freelancer', 'projectController@freelancer')->name('freelancer');
Route::get('/projectDetail', 'projectController@projectDetail')->name('projectDetail');
Route::get('/freelanderDetail', 'projectController@freelanderDetail')->name('freelanderDetail');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
