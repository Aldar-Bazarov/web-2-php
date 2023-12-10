<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/statya', [ApiController::class, 'getStatyas']);
Route::get('/rubric/{id}', [ApiController::class, 'getOneRubric']);
Route::get('/statya/{id}', [ApiController::class, 'getOneStatyas']);