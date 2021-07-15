<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\busformController;

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
    return view('index');
});

Route::view('busform',"busForm");
//Route::post('busform',[busformController::class,"addData"]);
Route::post('busform',[busformController::class,"addData"])->name ('addData.save');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
