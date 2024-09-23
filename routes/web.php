<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LotteryTicketController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/', function() {
    return redirect()->route('login');
})->name('home.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/lottery-tickets', [LotteryTicketController::class, 'index'])->name('lottery-ticket.index');
    Route::post('/lottery-tickets', [LotteryTicketController::class, 'store'])->name('lottery-ticket.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
