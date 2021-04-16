<?php

use App\Http\Controllers\MemberController;
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

Route::get('/', [MemberController::class,'index'])->name('home');

Route::get('/addmembre', [MemberController::class, 'create'])->name('addmembre');

Route::post('/addm2', [MemberController::class, 'store'])->name('addm2'); 

Route::delete('/delm/{id}', [MemberController::class, 'destroy'])->name('delm'); 

Route::get('/show/{genre?}', [MemberController::class, 'show'])->name('show');


