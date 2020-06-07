<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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




Route::group(['middleware'=>'auth'],function(){

    Route::get('/', function () {
        return view('frontpage');
    });

            //Route::get('/notebooks',['as'=>'notebooks.index', 'uses'=>'NotebooksController@index']);
           //Route::post('/notebooks','NotebooksController@store');
            //Route::get('/notebooks/{notebook}/','NotebooksController@show')->name('notebooks.show');
           //Route::get('/notebooks/create','NotebooksController@create');
           //Route::get('/notebooks/{notebooks}/edit','NotebooksController@edit')->name('notebooks.edit');
           //Route::put('/notebooks/{notebooks}','NotebooksController@update');
           //Route::delete('/notebooks/{notebooks}','NotebooksController@destroy');

           Route::resource('notebooks','NotebooksController');
            Route::resource('notes','NotesController');

            Route::get('notes/{notebookId}/createNote','NotesController@createNote')->name('notes.createNote');
});




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
