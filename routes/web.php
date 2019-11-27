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

Route::get('/', function () {
    return view('welcome');
});



Route::get('payment', function () {
    return view('payment');
});

Route::get('abscence', function () {
    return view('abscence');
});


Route::get('abscence', 'PostsController@abscence');
Route::get('payment', 'PostsController@payment');
Route::get('etudiant', 'EtudiantsController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('etudiant', 'EtudiantsController');