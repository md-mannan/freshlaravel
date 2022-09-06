<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurdController;
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

// Route::get('/', function () {
//     return view('Home');
// });
Route::get('/', [CurdController::class,'Home']);
Route::get('/create', function () {
    return view('Create');
});
Route::post('/insert', [CurdController::class,'Create']);
Route::get('/update', function () {
    return view('Update');
});
Route::get('/edit/{id}',[CurdController::class,'SingleView']);
Route::post('/updatedata', [CurdController::class,'UpdateData']);




Route::get('/delete/{id}',[CurdController::class,'Delete']);
