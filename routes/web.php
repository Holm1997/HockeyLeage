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

//TEST

Route::get('/test', 'TestController@index')->name('test.index');

//TOURNAMENT'S ROUTES

Route::group(['namespace' => 'Tournament'], function () {
    Route::get('/tournaments', 'IndexController')->name('tournaments.index');
    Route::get('/tournaments/{tournament}', 'ShowController')->name('tournaments.show');
});

//MATCH'S ROUTES

Route::group(['namespace' => 'Match'], function () {
    Route::get('/tournaments/{tournament}/matches', 'IndexController')->name('matches.index');
    Route::get('{tournament}/match/create', 'CreateController')->name('matches.create');
    Route::post('/match', 'StoreController')->name('matches.store');
    Route::get('/matches/{match}', 'ShowController')->name('matches.show');
    Route::get('/matches/{match}/edit', 'EditController')->name('matches.edit');
    Route::patch('/matches/{match}', 'UpdateController')->name('matches.update');
});


//TEAM'S ROUTES
Route::group(['namespace' => 'Team'], function(){
    Route::get('/teams', 'IndexController')->name('teams.index');
    Route::get('/teams/create', 'CreateController')->name('teams.create');
    Route::post('/teams', 'StoreController')->name('teams.store');
    Route::get('/teams/{team}', 'ShowController')->name('teams.show');
    Route::get('/teams/{team}/edit', 'EditController')->name('teams.edit');
    Route::post('/teams/{team}', 'UpdateController')->name('teams.update');
    Route::delete('/teams/{team}', 'DestroyController')->name('teams.delete');
});




//PLAYER'S ROUTES
Route::get('/players', 'PlayerController@index')->name('players.index');
Route::get('/players/create', 'PlayerController@create')->name('players.create');
Route::post('/players', 'PlayerController@store')->name('players.store');
Route::get('/players/{player}', 'PlayerController@show')->name('players.show');
Route::get('/players/{player}/edit', 'PlayerController@edit')->name('players.edit');
Route::patch('/players/{player}', 'PlayerController@update')->name('players.update');
Route::delete('/players/{player}', 'PlayerController@destroy')->name('players.delete');