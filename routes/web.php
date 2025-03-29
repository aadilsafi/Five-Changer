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

Route::get('/debug-provider', function() {
    // Check if the provider class exists
    $providerClass = 'App\\Providers\\Filament\\PartnerPanelProvider';
    $exists = class_exists($providerClass);

    // Try to instantiate it
    $instance = null;
    $error = null;

    try {
        if ($exists) {
            $instance = new $providerClass();
        }
    } catch (\Throwable $e) {
        $error = $e->getMessage();
    }

    // Check if bootstrap/providers.php includes it
    $providersFile = file_get_contents(base_path('bootstrap/providers.php'));
    $isRegistered = str_contains($providersFile, 'PartnerPanelProvider');

    return [
        'provider_class_exists' => $exists,
        'provider_instantiated' => $instance !== null,
        'error' => $error,
        'registered_in_bootstrap' => $isRegistered,
        'app_providers' => app()->getLoadedProviders(),
    ];
});

require __DIR__ . '/auth.php';
