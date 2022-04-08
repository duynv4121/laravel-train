<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;
use App\Events\eventNotification;

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
Route::get('/', [todoController::class, 'index'])->middleware('checkLogin');
Route::get('/them-cong-viec', [todoController::class, 'create']);
Route::post('/store', [todoController::class, 'store']);
Route::get('/cap-nhat-cong-viec/{id}', [todoController::class, 'edit']);
Route::post('/update/{id}', [todoController::class, 'update']);
Route::get('/delete/{id}', [todoController::class, 'destroy']);

Route::get('/str', [todoController::class, 'str']);

Route::get('/event', function(){
    event(new eventNotification('Đây là event'));
});

Route::get('/listen', function(){
    return view('listen');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
