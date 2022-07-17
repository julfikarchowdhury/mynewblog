<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/',[BlogController::class,'index']);

Route::get('/show/{id}',[BlogController::class,'show']);
Route::get('/blogshow/{id}',[BlogController::class,'blogshow']);

Route::get('/create/{id}',[BlogController::class,'create']);
Route::post('/store',[BlogController::class,'store']);



Route::get('/contactus', function () {
    return view('blog.contactus');
});

Route::get('/about', function () {
    return view('blog.about');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
