<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\gurucontroller;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//guru
Route::get('/guru', [gurucontroller::class, 'allguru']);
Route::post('/guru/addguru', [gurucontroller::class, 'addguru']);
Route::get('/guru/{id}', [gurucontroller::class, 'getOneguru']);
Route::post('/guru/update/{id}', [gurucontroller::class, 'editguru']);
Route::get('/guru/delete/{id}', [gurucontroller::class, 'deleteguru']);
