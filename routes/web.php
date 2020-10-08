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

Route::get('/register', function(){
    return view('register');
});

Route::get('/marketing', function () {
    return view('marketing');
});
Route::get('/landing', function () {
    return view('landing');
});
Route::get('/maria-camila', function () {
    return view('mariaCamila');
});

Route::get('/evaluation-form', 'FreeEvaluationController@create')->name('evaluationForm');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard'); 

// Route::get('/hablamos', function(){
//     return view('hablamos');
// });













