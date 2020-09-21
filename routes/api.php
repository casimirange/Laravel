<?php

use Illuminate\Http\Request;

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

Route::get('etudiants/', 'EtudiantController@index');
Route::get('etudiant/{id}', 'EtudiantController@show');
Route::post('etudiant', 'EtudiantController@store');
Route::put('etudiant/{id}', 'EtudiantController@update');
Route::delete('etudiant/{id}', 'EtudiantController@destroy');
