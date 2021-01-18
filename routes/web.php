<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminControll;

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
Route::get('/dashboard' , [adminControll::class,'dashboard']);
Route::get('/loginpage',[adminControll::class,'adminlogin']);
Route::post('/islogin',[adminControll::class,'adminloged']);

