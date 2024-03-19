<?php

declare(strict_types=1);

namespace App\Domain\Game\Service;

use App\Domain\Game\Api\GameFinder;
use Illuminate\Support\Collection;
use Override;

final readonly class GetGame implements \App\Domain\Game\Api\GetGame
{
    public function __construct(
        private GameFinder $gameFinder
    ) {
    }

    #[Override] public function do(): Collection
    {
        return $this->gameFinder->findAll();
    }
}