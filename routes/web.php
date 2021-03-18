<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('infopage');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/logout', function (\Illuminate\Http\Request $request) {
   \Illuminate\Support\Facades\Auth::logout();

   $request->session()->invalidate();
   $request->session()->regenerateToken();

   return redirect()->route('infopage');
})->name('logout');
