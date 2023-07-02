<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
    return redirect('/books');
});

// Route::get('/books',function(){
//     return view('books');

// });
Route::get('/books',[BookController::class,'books']);
Route::get('/create ',[BookController::class,'create']);
Route::post('/store ',[BookController::class,'store']);
Route::get('/detail/{book}',[BookController::class,'detail']);
Route::get('/compare',[BookController::class,'compareForm']);
Route::post('/compare',[BookController::class,'compare']);



