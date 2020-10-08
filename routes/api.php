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


 
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/customer', 'CustomerController@index'); 
// Route::post('/create-customer', 'CustomerController@store');

Route::apiResource('/user', 'UserController');



Route::get('/evaluations', 'FreeEvaluationController@index'); 
Route::post('/free-evaluations', 'FreeEvaluationController@store');

Route::get('/contacts', 'ContactController@index');
Route::post('/contacts', 'ContactController@store');

Route::post('webinar-registration' , 'WebinarRegisterController@store');

Route::get('/hablamos', function(){
    return view('hablamos');
});

// Route::get('/hablamos', function(){
//     return view('hablamos');
// });

Route::resource('file', 'UploaderFilesController');






