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

Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

Route::get('/', 'QuestionnaireController@index');
Route::get('/home', 'QuestionnaireController@index');
Route::post('/questionnaire_send', 'QuestionnaireController@store');
Route::view('/sample', 'sample');

//Admin Backend
Route::middleware(['isadmin'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::get('/','QuestionnaireController@show');
        Route::get('view_table/{id}','QuestionnaireController@single')->name('single');

    });

});
