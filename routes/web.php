<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/profile/hasil',[ProfileController::class, 'index'] );
Route::get('/profile/create',[ProfileController::class, 'store'] );
Route::post('/profile/create',[ProfileController::class, 'store_request'] );
Route::get('/profile/{name}/{npm}/{kelas}/', [ProfileController::class, 'profile']);

Route::resource('profile', ProfileController::class);
