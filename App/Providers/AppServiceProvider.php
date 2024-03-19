<?php

namespace App\Providers;

use App\Actions\Game\Api\GetGamesAction;
use app\UseCase\Game\Api\GetGame;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(GetGamesAction::class, \App\Actions\Game\Service\GetGamesAction::class);
        $this->app->bind(\App\UseCase\Game\Api\GetGame::class, \App\UseCase\Game\Service\GetGame::class);
        $this->app->bind(\App\Domain\Game\Api\GetGame::class, \App\Domain\Game\Service\GetGame::class);
        $this->app->bind(\App\Domain\Game\Api\GameFinder::class, \App\Domain\Game\Eloquent\GameRepository::class);
        $this->app->bind(\App\Domain\Game\Model\GameRepository::class, \App\Domain\Game\Eloquent\GameRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
