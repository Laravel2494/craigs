<?php

use App\Repository\Repository;

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

Route::get('/{uuid?}', ["uses" => "IndexController@index", "as" => "index"]);

// admin/
Route::group(['prefix' => 'admin'], function () {
    Route::resource('/menu', "Admin\AdminController", ["parameters" => ["dashboard" => "slug"]]);
    Route::resource('/dashboard', "Admin\AdminController", ["parameters" => ["dashboard" => "slug"]]);
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
