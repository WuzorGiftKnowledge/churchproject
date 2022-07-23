<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ChurchProjectController;

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


Route::get('/page', [ChurchProjectController::class,'page']);

Route::post('/signup', [ChurchProjectController::class,'create'])->name('signup');


/* Route::get('/page', function () {
    return view('page');
});

Route::get('/login', [ChurchProjectController::class,'login']);
Route::get('/registration', [ChurchProjectController::class,'registration']); */
