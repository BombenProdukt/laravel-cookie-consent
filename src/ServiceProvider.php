<?php

declare(strict_types=1);

namespace PreemStudio\CookieConsent;

use Livewire\Livewire;
use PreemStudio\CookieConsent\Http\Livewire\CookieConsentDialog;
use PreemStudio\Jetpack\Package\AbstractServiceProvider;

final class ServiceProvider extends AbstractServiceProvider
{
    public function packageRegistered(): void
    {
        Livewire::component('cookie-consent', CookieConsentDialog::class);
    }
}
