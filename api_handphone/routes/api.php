<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandphoneController;
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

Route::get('handphone',[HandphoneController::class,'index']);
Route::get('handphone/{id}',[HandphoneController::class,'findId']);
Route::post('handphone',[HandphoneController::class,'create']);
Route::put('handphone/{id}',[HandphoneController::class,'update']);
Route::delete('handphone/{id}',[HandphoneController::class,'delete']);