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

/**
 * Make new Participant Store
 */
Route::post('/participants', 'ParticipantsController@store')->name('participants.store');

/**
 * Make new Racing Store
 */
Route::post('/racings', 'RacingsController@store')->name('racings.store');

/**
 * Make new Participant to Race Store
 */
Route::post('/race-participants', 'RaceParticipantsController@store')->name('race-participants.store');

/**
 * Make new Consult for Results
 */
Route::get('/results', 'RaceParticipantsController@index')->name('race-participants.index');