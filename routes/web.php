<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LivingController;
use App\Http\Controllers\EconomyController;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\BrandingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GovernanceController;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\SaluranBantuanController;
use App\Http\Controllers\TagAgendaController;

// Membuat grup middleware untuk menggabungkan middleware yang sama

    //Guest
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('/home');

    Route::get('/Smart-Governance', [GovernanceController::class, 'governance']);
    Route::get('/Smart-Governance/{governance:slug}', [GovernanceController::class, 'showguest']);

    Route::get('/Smart-Economy', [EconomyController::class, 'economy']);
    Route::get('/Smart-Economy/{economy:slug}', [EconomyController::class, 'showguest']);

    Route::get('/Smart-Society', [SocietyController::class, 'society']);
    Route::get('/Smart-Society/{society:slug}', [SocietyController::class, 'showguest']);
    
    Route::get('/Smart-Branding', [BrandingController::class, 'branding']);
    Route::get('/Smart-Branding/{branding:slug}', [BrandingController::class, 'showguest']);

    Route::get('/Smart-Living', [LivingController::class, 'living']);
    Route::get('/Smart-Living/{living:slug}', [LivingController::class, 'showguest']);

    Route::get('/Smart-Environment', [EnvironmentController::class, 'environment']);
    Route::get('/Smart-Environment/{environment:slug}', [EnvironmentController::class, 'showguest']);

    Route::get('/Berita', [BeritaController::class, 'berita']);
    Route::get('/Berita/{berita:slug}', [BeritaController::class, 'showguest']);

    Route::get('/Pesan', [PesanController::class, 'create']);
    Route::post('/Pesan/{pesan:slug}', [PesanController::class, 'store']);
    Route::get('/Admin-Pesan', [PesanController::class, 'index'])->middleware('auth')->middleware('auth');
    Route::delete('/Admin-Pesan/{governance:slug}', [PesanController::class, 'destroy'])->middleware('auth');
    
    Route::get('/About', [DashboardController::class, 'about']);
    
    Route::get('/Admin-Dashboard', [DashboardController::class, 'indexadmin'])->middleware('auth');

    // Smart Governance
    Route::get('/Admin-SmartGovernance', [GovernanceController::class, 'index'])->middleware('auth');
    Route::post('/Admin-SmartGovernance', [GovernanceController::class, 'store'])->middleware('auth');
    Route::get('/Admin-SmartGovernance/{governance:slug}/edit', [GovernanceController::class, 'edit'])->middleware('auth');
    Route::get('/Admin-SmartGovernance/create', [GovernanceController::class, 'create'])->middleware('auth'); // Perbaikan pada path create
    Route::put('/Admin-SmartGovernance/{governance:slug}', [GovernanceController::class, 'update'])->middleware('auth');
    Route::delete('/Admin-SmartGovernance/{governance:slug}', [GovernanceController::class, 'destroy'])->middleware('auth');
    Route::get('/Admin-SmartGovernance/{governance:slug}', [GovernanceController::class, 'show'])->middleware('auth');
    Route::get('/Add-SmartGovernance/checkSlug', [GovernanceController::class, 'checkSlug'])->middleware('auth');

    // Category
    Route::get('/Admin-CategorySmartGovernance', [CategoryController::class, 'index'])->middleware('auth');
    Route::get('/Admin-CategorySmartGovernance/create', [CategoryController::class, 'create'])->middleware('auth');
    Route::post('/Admin-CategorySmartGovernance', [CategoryController::class, 'store'])->middleware('auth');
    Route::get('/Admin-CategorySmartGovernance/{category:slug}/edit', [CategoryController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-CategorySmartGovernance/{category:slug}', [CategoryController::class, 'update'])->middleware('auth');
    Route::get('/Admin-CategorySmartGovernance/{category:slug}', [CategoryController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-CategorySmartGovernance/{category:slug}', [CategoryController::class, 'destroy'])->middleware('auth');

    //Smart Economy

    Route::get('/Admin-SmartEconomy', [EconomyController::class, 'index'])->middleware('auth');
    Route::post('/Admin-SmartEconomy', [EconomyController::class, 'store'])->middleware('auth');
    Route::get('/Admin-SmartEconomy/create', [EconomyController::class, 'create'])->middleware('auth'); // Perbaikan pada path create
    Route::get('/Admin-SmartEconomy/{economy:slug}/edit', [EconomyController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-SmartEconomy/{economy:slug}', [EconomyController::class, 'update'])->middleware('auth');
    Route::get('/Admin-SmartEconomy/{economy:slug}', [EconomyController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-SmartEconomy/{economy:slug}', [EconomyController::class, 'destroy'])->middleware('auth');
                    

    // Smart Branding
    Route::get('/Admin-SmartBranding', [BrandingController::class, 'index'])->middleware('auth');
    Route::post('/Admin-SmartBranding', [BrandingController::class, 'store'])->middleware('auth');
    Route::get('/Admin-SmartBranding/create', [BrandingController::class, 'create'])->middleware('auth'); // Perbaikan pada path create
    Route::get('/Admin-SmartBranding/{branding:slug}/edit', [BrandingController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-SmartBranding/{branding:slug}', [BrandingController::class, 'update'])->middleware('auth');
    Route::get('/Admin-SmartBranding/{branding:slug}', [BrandingController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-SmartBranding/{branding:slug}', [BrandingController::class, 'destroy'])->middleware('auth');
    
    // Smart Society
    Route::get('/Admin-SmartSociety', [SocietyController::class, 'index'])->middleware('auth');
    Route::post('/Admin-SmartSociety', [SocietyController::class, 'store'])->middleware('auth');
    Route::get('/Admin-SmartSociety/create', [SocietyController::class, 'create'])->middleware('auth'); // Perbaikan pada path create
    Route::get('/Admin-SmartSociety/{society:slug}/edit', [SocietyController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-SmartSociety/{society:slug}', [SocietyController::class, 'update'])->middleware('auth');
    Route::get('/Admin-SmartSociety/{society:slug}', [SocietyController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-SmartSociety/{society:slug}', [SocietyController::class, 'destroy'])->middleware('auth');

    // Smart Living
    Route::get('/Admin-SmartLiving', [LivingController::class, 'index'])->middleware('auth');
    Route::post('/Admin-SmartLiving', [LivingController::class, 'store'])->middleware('auth');
    Route::get('/Admin-SmartLiving/create', [LivingController::class, 'create'])->middleware('auth'); // Perbaikan pada path create
    Route::get('/Admin-SmartLiving/{living:slug}/edit', [LivingController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-SmartLiving/{living:slug}', [LivingController::class, 'update'])->middleware('auth');
    Route::get('/Admin-SmartLiving/{living:slug}', [LivingController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-SmartLiving/{living:slug}', [LivingController::class, 'destroy'])->middleware('auth');
    
    // Smart Environment
    Route::get('/Admin-SmartEnvironment', [EnvironmentController::class, 'index'])->middleware('auth');
    Route::post('/Admin-SmartEnvironment', [EnvironmentController::class, 'store'])->middleware('auth');
    Route::get('/Admin-SmartEnvironment/create', [EnvironmentController::class, 'create'])->middleware('auth'); // Perbaikan pada path create
    Route::get('/Admin-SmartEnvironment/{environment:slug}/edit', [EnvironmentController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-SmartEnvironment/{environment:slug}', [EnvironmentController::class, 'update'])->middleware('auth');
    Route::get('/Admin-SmartEnvironment/{environment:slug}', [EnvironmentController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-SmartEnvironment/{environment:slug}', [EnvironmentController::class, 'destroy'])->middleware('auth');
    
    // Saluran Bantuan dan Layanan Darurat
    Route::get('/Admin-DaruratBantuan', [SaluranBantuanController::class, 'index'])->middleware('auth');
    Route::post('/Admin-DaruratBantuan', [SaluranBantuanController::class, 'store'])->middleware('auth');
    Route::get('/Admin-DaruratBantuan/create', [SaluranBantuanController::class, 'create'])->middleware('auth'); // Perbaikan pada path create
    Route::get('/Admin-DaruratBantuan/{saluranBantuan:slug}/edit', [SaluranBantuanController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-DaruratBantuan/{saluranBantuan:slug}', [SaluranBantuanController::class, 'update'])->middleware('auth');
    Route::get('/Admin-DaruratBantuan/{saluranBantuan:slug}', [SaluranBantuanController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-DaruratBantuan/{saluranBantuan:slug}', [SaluranBantuanController::class, 'destroy'])->middleware('auth');


    // Berita
    Route::get('/Admin-Berita', [BeritaController::class, 'index'])->middleware('auth');
    Route::post('/Admin-Berita', [BeritaController::class, 'store'])->middleware('auth');
    Route::get('/Admin-Berita/create', [BeritaController::class, 'create'])->middleware('auth'); // Perbaikan pada path create
    Route::get('/Admin-Berita/{berita:slug}/edit', [BeritaController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-Berita/{berita:slug}', [BeritaController::class, 'update'])->middleware('auth');
    Route::get('/Admin-Berita/{berita:slug}', [BeritaController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-Berita/{berita:slug}', [BeritaController::class, 'destroy'])->middleware('auth');
    Route::get('/Add-Berita/checkSlug', [BeritaController::class, 'checkSlug'])->middleware('auth');

    // Tag Berita
    Route::get('/Admin-TagBerita', [TagController::class, 'index'])->middleware('auth');
    Route::get('/Admin-TagBerita/create', [TagController::class, 'create'])->middleware('auth');
    Route::post('/Admin-TagBerita', [TagController::class, 'store'])->middleware('auth');
    Route::get('/Admin-TagBerita/{tag:slug}/edit', [TagController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-TagBerita/{tag:slug}', [TagController::class, 'update'])->middleware('auth');
    Route::get('/Admin-TagBerita/{tag:slug}', [TagController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-TagBerita/{tag:slug}', [TagController::class, 'destroy'])->middleware('auth');

    // Agenda
    Route::get('/Admin-Agenda', [AgendaController::class, 'index'])->middleware('auth');
    Route::post('/Admin-Agenda', [AgendaController::class, 'store'])->middleware('auth');
    Route::get('/Admin-Agenda/create', [AgendaController::class, 'create'])->middleware('auth'); // Perbaikan pada path create
    Route::get('/Admin-Agenda/{agenda:slug}/edit', [AgendaController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-Agenda/{agenda:slug}', [AgendaController::class, 'update'])->middleware('auth');
    Route::get('/Admin-Agenda/{agenda:slug}', [AgendaController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-Agenda/{agenda:slug}', [AgendaController::class, 'destroy'])->middleware('auth');
    Route::get('/Add-Agenda/checkSlug', [AgendaController::class, 'checkSlug'])->middleware('auth');

    // Tag Agenda
    Route::get('/Admin-TagAgenda', [TagAgendaController::class, 'index'])->middleware('auth');
    Route::get('/Admin-TagAgenda/create', [TagAgendaController::class, 'create'])->middleware('auth');
    Route::post('/Admin-TagAgenda', [TagAgendaController::class, 'store'])->middleware('auth');
    Route::get('/Admin-TagAgenda/{tagAgenda:slug}/edit', [TagAgendaController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-TagAgenda/{tagAgenda:slug}', [TagAgendaController::class, 'update'])->middleware('auth');
    Route::get('/Admin-TagAgenda/{tagAgenda:slug}', [TagAgendaController::class, 'show'])->middleware('auth');
    Route::delete('/Admin-TagAgenda/{tagAgenda:slug}', [TagAgendaController::class, 'destroy'])->middleware('auth');

    // Account Settings
    Route::get('/Admin-Account', [LoginController::class, 'show'])->middleware('auth');
    Route::get('/Admin-Account/{user:id}/edit', [LoginController::class, 'edit'])->middleware('auth');
    Route::put('/Admin-Account/{id}', [LoginController::class, 'update'])->middleware('auth');

    // Register
    Route::get('/Admin-Register', [RegisterController::class, 'index'])->middleware('auth');
    Route::post('/Admin-Register', [RegisterController::class, 'store'])->middleware('auth');
    
    // Login
    Route::get('/Admin-Login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/Admin-Login', [LoginController::class, 'aunthenticate']);
    
    //logout
    Route::post('/Admin-Logout', [LoginController::class, 'logout'])->middleware('auth');


    


