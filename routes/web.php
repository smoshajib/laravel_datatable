<?php

use Illuminate\Support\Facades\Route;
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

// Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/button', [UsersController::class, 'button_table'])->name('view.button');
Route::get('/getbutton', [UsersController::class, 'get_button_table'])->name('get.button');
Route::resource('/',UsersController::class);

