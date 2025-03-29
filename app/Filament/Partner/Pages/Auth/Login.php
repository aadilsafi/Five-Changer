<?php
namespace App\Filament\Partner\Pages\Auth;

use Filament\Pages\Auth\Login as BaseLogin;
use Illuminate\Support\Facades\Auth;

class Login extends BaseLogin
{
    protected function getRedirectUrl(): string
    {
        return '/partner';
    }
}
