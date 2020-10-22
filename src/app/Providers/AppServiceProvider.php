<?php
namespace Ejetar\HttpStatusCodeUtils\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    public function boot() {
//        $this->publishes([
//            __DIR__ . '/../../config/http-status-code-utils.php' => config_path('http-status-code-utils.php'),
//        ]);

        $this->loadTranslationsFrom(__DIR__.'/../../resources/lang', 'http-status-code-utils');

    }

    public function register() {
//        $this->mergeConfigFrom(__DIR__ . '/../../config/http-status-code-utils.php', 'http-status-code-utils');
    }
}
