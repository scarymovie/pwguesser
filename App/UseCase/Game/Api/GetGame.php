<?php

declare(strict_types=1);

namespace App\UseCase\Game\Api;

use Illuminate\Support\Collection;

interface GetGame
{
    public function do(): Collection;
}