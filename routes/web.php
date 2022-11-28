<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ParcelController;
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
 });

 Route::get('/login', function () {
    return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/dashboard',function(){return view('dashboard');})->name('dashboard');

Route::get('/add_user',[ParcelController::class, 'create'])->name('add_user');
Route::post('/add_user',[ParcelController::class, 'store'])->name('add_user');

Route::get('/payment',function(){return view('payment');})->name('payment');
Route::get('/view',function(){return view('view');})->name('view');
});



require __DIR__.'/auth.php';
