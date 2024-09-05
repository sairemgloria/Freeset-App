<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

# Debugging techniques:
# dd(<Your Variable>);
# echo '<pre>';
# print_r(<Your Variable>)
# echo '</pre>';
# Use this code for an API
# return ['Key' => 'Value'];

Route::get('/', function () {
    // Page information
    $pageInfo = [
        'Title' => 'Home Page',
        'Page URI' => $_SERVER['REQUEST_URI']
    ];

    // Use this code for an API
    // return ['Key' => 'Value'

    // return view with arrays
    return view('home', ['pageInfo' => $pageInfo]);
});

Route::get('/presets', function () {
    // Page information
    $pageInfo = [
        'Title' => 'Presets Page',
        'Page URI' => $_SERVER['REQUEST_URI']
    ];

    $presets = [
        [
            'id' => 1,
            'title' => 'Orange Teal Preset',
            'description' => 'Warm and vibrant but lovely orange and teal',
            'price' => 'Free'
        ],
        [
            'id' => 2,
            'title' => 'Black & White Preset',
            'description' => 'Embrace of black and white modernity and purity',
            'price' => 'Free'
        ],
        [
            'id' => 3,
            'title' => 'Warm Preset',
            'description' => 'Presence of calmness',
            'price' => 'Free'
        ]
    ];

    // return view with arrays
    return view('presets', ['pageInfo' => $pageInfo], ['presets' => $presets]);
});

Route::get('/preset/{id}', function ($id) {
    // Page information
    $pageInfo = [
        'Title' => 'Presets Page',
        'Page URI' => $_SERVER['REQUEST_URI']
    ];

    $presets = [
        [
            'id' => 1,
            'title' => 'Orange Teal Preset',
            'description' => 'Warm and vibrant but lovely orange and teal',
            'price' => 'Free'
        ],
        [
            'id' => 2,
            'title' => 'Black & White Preset',
            'description' => 'Embrace of black and white modernity and purity',
            'price' => 'Free'
        ],
        [
            'id' => 3,
            'title' => 'Warm Preset',
            'description' => 'Presence of calmness',
            'price' => 'Free'
        ]
    ];

    // Old code
    // $preset = Arr::first($presets, fn($preset) => $preset['id'] == $id);
    // return view('testpresets', ['preset' => $preset]);

    // New code
    $preset = Arr::first($presets, fn($preset) => $preset['id'] == $id);
    if ($preset) {
        return view('preset', ['preset' => $preset]);
    } else {
        return response()->json([
            'message' => 'Preset not found',
            'status' => 404
        ], 404);
    }
});

Route::get('/contact', function () {
    // Page information
    $pageInfo = [
        'Title' => 'Contact Page',
        'Page URI' => $_SERVER['REQUEST_URI']
    ];

    // return view with arrays
    return view('contact', ['pageInfo' => $pageInfo]);
});

Route::get('/faq', function () {
    // Page information
    $pageInfo = [
        'Title' => 'FAQ Page',
        'Page URI' => $_SERVER['REQUEST_URI']
    ];

    // return view with arrays
    return view('faq', ['pageInfo' => $pageInfo]);
});

Route::get('/about', function () {
    // Page information
    $pageInfo = [
        'Title' => 'About Page',
        'Page URI' => $_SERVER['REQUEST_URI']
    ];

    // return view with arrays
    return view('about', ['pageInfo' => $pageInfo]);
});

Route::get('/testhome', function () {
    // Page information
    $pageInfo = [
        'Title' => 'Test Page',
        'Page URI' => $_SERVER['REQUEST_URI']
    ];

    // return view with arrays
    return view('testhome', ['pageInfo' => $pageInfo]);
});
