<?php

use App\Models\Branding;
use App\Http\Controllers\BrandingController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Admin.Dashboard.dashboard',[
        "judul" => "Dashboard"
    ]);
});

//Smart Branding
Route::get('/Admin-SmartBranding', [BrandingController::class, 'index']);
Route::get('/branding/{id}', [BrandingController::class, 'show']);