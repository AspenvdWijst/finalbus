<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\FestivalController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FestivalController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/festivals/{festival}/buses/{bus}/order', [BusController::class, 'order'])->name('festival.order');
    Route::post('/ticket/{bus}', [TicketController::class, 'store'])->name('tickets.store');
});

Route::get('/festivals/{festival}/buses', [FestivalController::class, 'show'])->name('festival.bus');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/admin/bus', [BusController::class, 'create'])->name('admin.bus');
    Route::post('/admin/festival', [FestivalController::class, 'create'])->name('admin.festival');
});


require __DIR__.'/auth.php';


