<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{StudentController};

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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('/students', StudentController::class)->middleware('auth');
// Route get => students => index 
// Route get => students/create => create
// Route post => students => store
// Route get => students/{id} => show
// Route get => students/{id}/edit => edit
// Route put/patch => students/{id} => update 
// Route delete => students/{id} => destroy

 
