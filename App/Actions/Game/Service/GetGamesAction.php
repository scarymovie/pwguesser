<?php

declare(strict_types=1);

namespace App\Actions\Game\Service;

use App\UseCase\Game\Api\GetGame;

final readonly class GetGamesAction implements \App\Actions\Game\Api\GetGamesAction
{
    public function __construct(
        private GetGame $getGame
    ) {
    }

    #[\Override] public function do(): string
    {
        return json_encode($this->getGame->do(), JSON_UNESCAPED_UNICODE);
    }
}