<?php
// MyVendor\contactform\src\ContactFormServiceProvider.php
namespace MyVendor\contactform;

use Illuminate\Support\ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'contact');
    }

    public function register()
    {
    }
}

?>