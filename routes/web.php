<?php

 use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\GiriscikisController;
 use App\Http\Controllers\GirisController;
 use App\Http\Controllers\CikisController;


use Illuminate\Http\Request;
use App\Models\pdksz;
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

//Route::get('/', function () {
  //  return view('homepage');
//});
Route::get('/', [GiriscikisController::class , 'index'])->name('homepage');

Route::post('/giris', [GiriscikisController::class , 'giris'])->name('pdksz.giris');



Route::post('/cikis', [GiriscikisController::class , 'cikis'])->name('pdksz.cikis');
