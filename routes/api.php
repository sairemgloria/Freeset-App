<?php

use App\Http\Controllers\Api\Admin\ApiPresetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
   return $request->user();
})->middleware('auth:sanctum');

// Test api
Route::get('/test', function() {
   return 'test api only';
});

// Admin Group Api Section
// NOTE: use Postman to check the API if working
//       Example:
//       http://127.0.0.1:8000/api/admin/presets
//       http://127.0.0.1:8000/api/admin/create-preset
Route::prefix('admin')->group(function () {
   // Create
   Route::post('create-preset', [ApiPresetController::class, 'store']);

   // Read
   Route::get('presets', [ApiPresetController::class, 'index']);
   Route::get('preset/{id}', [ApiPresetController::class, 'show']);

   // Update
   Route::put('preset/{id}', [ApiPresetController::class, 'update']);
   
   // Delete
   Route::delete('preset/{id}', [ApiPresetController::class, 'destroy']);
});