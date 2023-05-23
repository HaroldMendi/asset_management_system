<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\AssetTagController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Asset Route
    Route::resource('/asset', AssetController::class);

    // Asset Tag Route
    Route::get('/asset-tag/create/{id}', [AssetTagController::class, 'createAssetTag'])->name('asset_tag.create');
    Route::resource('/asset-tag', AssetTagController::class);

    // Livewire Asset Create
    Route::get('/asset-create', \App\Http\Livewire\AssetCreate::class)->name('asset-create');
});
