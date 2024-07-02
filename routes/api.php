<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\PaketWisataController;

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

Route::get('/destinasi', [DestinasiController::class, 'index']);
Route::get('/destinasi/{id}', [DestinasiController::class, 'show']);
Route::post('/destinasi', [DestinasiController::class, 'store']);
Route::put('/destinasi/{id}', [DestinasiController::class, 'update']);
Route::delete('/destinasi/{id}', [DestinasiController::class, 'destroy']);

Route::get('/paket-wisata', [PaketWisataController::class, 'index']);
Route::get('/paket-wisata/{id}', [PaketWisataController::class, 'show']);
Route::post('/paket-wisata', [PaketWisataController::class, 'store']);
Route::put('/paket-wisata/{id}', [PaketWisataController::class, 'update']);
Route::delete('/paket-wisata/{id}', [PaketWisataController::class, 'destroy']);
