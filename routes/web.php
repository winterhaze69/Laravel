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

Route::get('/', 'View@home');
Route::get('/contact/{name}', 'View@contact'); //'View@contact' veut dire va dans View et exé la fonction contact
Route::get('/list', 'View@serieList');
Route::get('/add', 'View@addSeries');
Route::get('/addactor', 'View@addactor');
Route::get('/genres', 'View@genres');
Route::get('/addgenre', 'View@addgenre');

Route::post('/insertgenre', 'Serie@insertgenre');
Route::post('/insertactor', 'Serie@insertactor');
Route::post('/insertserie', 'Serie@insertOne');
Route::post('/deleteserie', 'Serie@deleteOne');
Route::post('/updateserie', 'View@updateForm');
Route::post('/updateserieaction', 'Serie@updateOne');
Route::get('/actors', 'View@addActors');
Route::post('/deleteactors', 'Serie@deleteactor');
Route::post('/deletegenre', 'Serie@deletegenre');
