<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LotteryTicketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/so_funktionierts', [HomeController::class, 'so_funktionierts'])->name('dashboard');

    Route::get('/meine_lottoscheine', [LotteryTicketController::class, 'index'])->name('lottery-ticket.index');
    Route::post('/lottery-tickets', [LotteryTicketController::class, 'store'])->name('lottery-ticket.store');

    Route::get('/datenschutz', [HomeController::class, 'privacy_policy'])->name('privacy_policy');
    Route::get('/impressum', [HomeController::class, 'impressum'])->name('impressum');
});

Route::middleware('auth')->group(function () {
    Route::get('/kundenbereich', [ProfileController::class, 'index'])->name('customer.profile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
