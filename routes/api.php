<?php

use App\Http\Controllers\API\categoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
 
// Route::get('test',function(){
//     $data=[
//         ['name'=>'first','price'=>500],
//         ['name'=>'secund','price'=>1000],
//     ];
// return response()->json($data);
// });

Route::apiResource('majors',categoryController::class);
// Route::apiResource('doctors',categoryController::class);
// Route::apiResource('doctors',categoryController::class);


