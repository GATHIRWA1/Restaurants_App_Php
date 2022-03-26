<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Restocontroller;

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
//Route::get('/', function () {return view('welcome');});

Route::get('/home',[Restocontroller::class,'index']);

Route::get('/list',[Restocontroller::class,'restolist']);


Route::post('/add',[Restocontroller::class,'restoAdd']);
Route::view('/add','addresto');
