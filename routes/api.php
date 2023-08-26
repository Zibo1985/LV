<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Liste aller Aufgaben 127.0.0.1:8000/api/todos
Route::get('todos/get', 'App\Http\Controllers\TodoController@index'); 

// Eine neue Aufgabe erstellen. 127.0.0.1:8000/api/todos/post/name/{name}/description/{beschreibung}/don_until/{YYYY-MM-DD}
Route::get('todos/post/name/{name}/description/{beschreibung}/done_until/{date}', 'App\Http\Controllers\TodoController@store')->name('todos.store');


// Details einer bestimmten Aufgabe anzeigen 127.0.0.1:8000/api/todos/get/{id}
Route::get('todos/get/{id}', 'App\Http\Controllers\TodoController@show');

// Eine bestimmt Aufgabe aktualisieren  127.0.0.1:8000/api/todos//patch/name/{name}/description/{beschreibung}/don_until/{YYYY-MM-DD}
//Route::get('todos/patch', 'App\Http\Controllers\TodoController@update');
Route::get('todos/patch/{id}/name/{name}/description/{beschreibung}/done_until/{date}', 'App\Http\Controllers\TodoController@updateDB')->name('todos.updateDB');

// Eine bestimmte Aufgabe löschen 127.0.0.1:8000/api/todos/delete/{id}
Route::get('todos/delete/{id}', 'App\Http\Controllers\TodoController@destroy');
