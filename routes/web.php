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
app()->bind('title', function (){
    return new \App\title;
});
Route::middleware('auth')->group(function (){
    Route::get('/', function () {
        return view('home.home');
    });

    Route::get('/clients','ClientController@index');
    Route::get('/clients/create', 'ClientController@create');
    Route::post('/clients/new', 'ClientController@store');
    Route::patch('/clients/{id}', 'ClientController@update');
    Route::get('/clients/{id}/edit', 'ClientController@edit');

    Route::get('/room/{id}','RoomController@index');
    Route::post('/room/{id}','RoomController@show');

    Route::get('/room/{client_id}/{room_id}/{dateFrom}/{dateTo}','RoomController@store')->name('book_room');


    Route::get('/reservations','Reservation@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
