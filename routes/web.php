<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [ApplicationController::class, 'index'])->where('view', 'welcome');
//Route::get('/admin', AdminController::class)->where('view', 'admin');

Route::get('{view}', [AdminController::class, 'index'])->where('view', '(.*)');
//Route::get('/admin/{path?}', [AdminController::class, 'index'])->where('path', '.*')->name('admin');