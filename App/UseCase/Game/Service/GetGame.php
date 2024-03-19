<?php

declare(strict_types=1);

namespace App\UseCase\Game\Service;

use Illuminate\Support\Collection;

final readonly class GetGame implements \App\UseCase\Game\Api\GetGame
{
    public function __construct(
        private \App\Domain\Game\Api\GetGame $getGame
    ) {
    }

    public function do(): Collection
    {
        return $this->getGame->do();
    }
}