<?php

namespace App\Providers;

use App\repository\IRepository\ImessagesRepository;
use App\repository\MessagesIMP;
use App\service\IService\ImessageService;
use App\service\MessageService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ImessagesRepository::class, MessagesIMP::class);
        $this->app->bind(ImessageService::class, MessageService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
