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
//TEAM'S ROUTES
Route::get('/teams', 'TeamController@index')->name('teams.index');
Route::get('/teams/create', 'TeamController@create')->name('teams.create');
Route::post('/teams', 'TeamController@store')->name('teams.store');
Route::get('/teams/{team}', 'TeamController@show')->name('teams.show');


//PLAYER'S ROUTES
Route::get('/players', 'PlayerController@index')->name('players.index');