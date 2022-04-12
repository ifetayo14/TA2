<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UsersController;

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
    return view('backOffice.index');
});

Route::get('/registration', [PageController::class, 'showRegistration']);
Route::get('/login', [PageController::class, 'showLogin']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/showScrape', [PageController::class, 'showScrape']);
Route::get('/showPromo', [PageController::class, 'showPromo']);
Route::get('/showAkun', [PageController::class, 'showAkun']);
//Route::get('/verif', [PageController::class, 'verif']);

Route::get('/editAkun', [UsersController::class, 'edit']);
Route::post('/registrationProcess', [UsersController::class, 'store']);
Route::get('/verify/{email}', [UsersController::class, 'verify']);

