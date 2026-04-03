<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Helpers\CurrencyHelper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Set locale from session
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }
         $helperPath = app_path('Helpers/helpers.php');
    
        if (file_exists($helperPath)) {
            require_once $helperPath;
        }

        // Custom Blade directive for currency conversion
        Blade::directive('currency', function ($expression) {
            return "<?php echo \App\Helpers\CurrencyHelper::format(\App\Helpers\CurrencyHelper::convert($expression, 'EUR', \App\Helpers\CurrencyHelper::current())); ?>";
        });
        
        // Custom Blade directive for translation
        Blade::directive('trans', function ($expression) {
            return "<?php echo __($expression); ?>";
        });
    }
}
