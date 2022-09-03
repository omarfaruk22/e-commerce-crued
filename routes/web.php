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
    return view('frontend.home');
});

Route::get('/admin', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix'=>'/admin'],function(){
    
Route::group(['prefix'=>'/product'],function(){
    Route::get('/create','App\Http\Controllers\Backend\ProductControler@create')
    ->name('createproduct');
    Route::post('/insert','App\Http\Controllers\Backend\ProductControler@store')
    ->name('insert');
    Route::get('/manage','App\Http\Controllers\Backend\ProductControler@index')
    ->name('manage');
    Route::get('/edit/{id}','App\Http\Controllers\Backend\ProductControler@edit')
    ->name('edit');
    Route::post('/update/{id}','App\Http\Controllers\Backend\ProductControler@update')
    ->name('update');
    Route::get('/delete/{id}','App\Http\Controllers\Backend\ProductControler@delete')
    ->name('delete');
 });
});
 

require __DIR__.'/auth.php';
