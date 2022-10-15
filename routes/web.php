<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UsersController;
use App\Http\MiddleWare\AuthUser;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[UsersController::class, 'index']);
Route::get('/home/{title}',[UsersController::class, 'show'])->middleware();
Route::get('/user',function (){
    // return ('show');
    return (['SQL','PHP','LARAVEL']);
});
// todo
Route::middleware("authuser")->group(function(){
    Route::get('/todo/create', function () {
        return view('todo.addTodo');
    });
    Route::get('/todo', [TodoController::class,'read']);
    Route::get('/todo/{id}', [TodoController::class,'destroy']);
    Route::get('/todo/{id}/edit', [TodoController::class,'edit']);
    Route::post('/todo/{id}/edit', [TodoController::class,'update']);
    Route::post('/todo/create',[TodoController::class,'create']);
});

// note

Route::resource('/note', NoteController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');