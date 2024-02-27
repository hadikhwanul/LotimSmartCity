<?php

use App\Models\Branding;
use App\Models\Category;
use App\Models\Governance;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandingController;
use App\Http\Controllers\GovernanceController;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    return view('Admin.Dashboard.dashboard',[
        "judul" => "Dashboard"
    ]);
});

//Smart Governance
//Admin
Route::get('/Admin-SmartGovernance', [GovernanceController::class, 'index']);
Route::get('/SmartGovernance/{governance:slug}', [GovernanceController::class, 'show']);
//User
Route::get('/Admin-CategorySmartGovernance', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

//Smart Branding
Route::get('/Admin-SmartBranding', [BrandingController::class, 'index']);
Route::get('/SmartBranding/{branding:slug}', [BrandingController::class, 'show']);

