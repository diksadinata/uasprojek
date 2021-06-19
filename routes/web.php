<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nilaiController;
use App\Http\Controllers\liveController;
use App\Http\Livewire\Members;
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

Route::get('/anime', function () {
    return view('anime');
});

/*Route::get('/nilai', function () {
    return view('nilai');
});*/

/*Route::get('/nilaihasil', function () {
    return view('nilaihasil');
});*/
Route::get('/home', 'App\Http\Controllers\nilaiController@index');
//Route::get('/anime', 'App\Http\Controllers\nilaiController@anime');
Route::get('/', 'App\Http\Controllers\liveController@LiveAction');
Route::get('/input', 'App\Http\Controllers\nilaiController@input');
Route::get('/input1', 'App\Http\Controllers\liveController@input1');
//Route::get('/', [nilaiController::class, '']);
/*Route::get('/output', 'App\Http\Controllers\nilaiController@output');
Route::get('/add', [nilaiController::class, 'add']);
/*Route::get('/nilai', 'nilaiController@index');*/
Route::post('/add', [nilaiController::class, 'add']);
Route::post('/add', [liveController::class, 'add']);
Route::get('/edit/{id}', 'App\Http\Controllers\nilaiController@edit');
Route::get('/edit1/{id}', 'App\Http\Controllers\liveController@edit1');

Route::put('/edit/{id}', 'App\Http\Controllers\nilaiController@update');
Route::put('/edit1/{id}', 'App\Http\Controllers\liveController@update1');
Route::delete('/delete/{id}', 'App\Http\Controllers\nilaiController@destroy');
Route::delete('/delete/{id}', 'App\Http\Controllers\liveController@destroy');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//      return view('dashboard');
// })->name('dashboard');


Route::group(['middleware'=>['auth:sanctum','verified']], function(){
    Route::get('/dashboard', function() {
        return view('dashboard');

    })->name('dashboard');
    Route::get('member',Members::class)->name('member');
});