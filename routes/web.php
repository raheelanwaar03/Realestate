<?php

use App\Http\Controllers\landingPageController;
use App\Http\Controllers\OtherPagesController;
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
Route::get('/',[landingPageController::class, 'landingPage'])->name('landingPage');

// Other pages route

Route::get('/contact.us',[OtherPagesController::class, 'contactUs'])->name('user.contactUs');
Route::get('/estimation',[OtherPagesController::class, 'estimation'])->name('user.Estimation');

require __DIR__.'/auth.php';
