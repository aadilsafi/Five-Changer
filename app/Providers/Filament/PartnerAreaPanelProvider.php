<?php

namespace App\Providers\Filament;

use App\Http\Middleware\PartnerPanelAccessMiddleware;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class PartnerAreaPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('partner-area')
            ->path('partner-area')
            ->colors([
                'primary' => Color::Amber,
            ])
            ->userMenuItems([
                // Add a simple text item for the referral code
                MenuItem::make()
                    ->label(fn() => 'Referral Code: ' . (Auth::user()->referral_code ?? 'N/A'))
                    ->icon('heroicon-o-clipboard-document')
                    ->url(null)
                    ->sort(1),

                // No need to explicitly add profile and logout - they're added automatically
            ])
            ->discoverResources(in: app_path('Filament/PartnerArea/Resources'), for: 'App\\Filament\\PartnerArea\\Resources')
            ->discoverPages(in: app_path('Filament/PartnerArea/Pages'), for: 'App\\Filament\\PartnerArea\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/PartnerArea/Widgets'), for: 'App\\Filament\\PartnerArea\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                PartnerPanelAccessMiddleware::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
