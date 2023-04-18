<?php
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('images', [ImageController::class, 'index'])->name('images');
Route::post('images', [ImageController::class, 'upload'])->name('images');