<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/regsmanager', [App\Http\Controllers\RegManagerController::class, 'registermanager'])->name('registermanager');


Route::get('/regsmanager', function () {
    return view('regs.manager');
});

Route::resource('post', [App\Http\Controllers\PostController::class,]);
//Route::post('/jobs', [App\Http\Controllers\PostController::class, 'store'])->name('store');

Route::post('/jobs', function () {
    return view('manager.jobppsting');
});