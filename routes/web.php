<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PresetController;
use App\Models\Preset;

Route::get('/', function () {
    // Page information
    $pageInfo = [
        'Title' => 'Home Page',
        'Page URI' => $_SERVER['REQUEST_URI']
    ];

    // Use this code for an API
    // return ['Key' => 'Value'];

    // return view with arrays
    return view('home', ['pageInfo' => $pageInfo]);
});

Route::get('/presets', function () {
    // Fetch 10 presets per page
    $presets = Preset::paginate(4);

    // Return the view with the paginated presets
    return view('presets', ['presets' => $presets]);
});

Route::get('/preset/{id}', function ($id) {

    $preset = Preset::find($id);

    if (!$preset) {
        return [
            'msg' => 'Preset not found',
            'status' => 404
        ];
        // abort(404);
    }

    return view('preset', ['preset' => Preset::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/about', function () {
    return view('about');
});


// Admin routes
Route::get('admin/login', function () {
    return view('admin/login');
});

// Group routes under 'admin' prefix
Route::prefix('admin')->group(function () {
    // Count all presets (Dashboard)
    Route::get('dashboard', [PresetController::class, 'countPresets'])->name('admin.dashboard');

    // Create a new preset
    Route::post('create-preset', [PresetController::class, 'createPreset'])->name('admin.createPreset');

    // Check if a preset name already exists
    Route::post('check-preset-name', [PresetController::class, 'checkExistingPresetName'])->name('admin.checkPresetName');

    // Read all presets
    Route::get('presets', [PresetController::class, 'allPresets'])->name('admin.presets');

    // Find specific preset
    Route::get('preset/{id}', [PresetController::class, 'selectPreset'])->name('admin.preset');

    // Get the preset data to be updated
    Route::get('preset/{id}/edit', [PresetController::class, 'selectPresetToEdit']);
    // Check if a preset name already exists
    Route::post('update-preset-name', [PresetController::class, 'checkExistingPresetName'])->name('admin.checkPresetName');
    // Update preset
    Route::put('preset/{id}', [PresetController::class, 'updatePreset'])->name('admin.updatePreset');

    // Delete preset
    Route::delete('preset/{id}/delete', [PresetController::class, 'deletePreset']);
});
