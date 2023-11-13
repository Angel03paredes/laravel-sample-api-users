<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/si",function(){
    return response()->json(['message'=>'success','data'=>null]);
});

Route::prefix('user')->group(function(){
    Route::get("/getAll",[UserController::class,'getAll']);
    Route::get("/getById/{id}",[UserController::class,'getById']);
    Route::post("/add",[UserController::class,'add']);
});
