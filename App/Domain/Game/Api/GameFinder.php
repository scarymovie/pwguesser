<?php

declare(strict_types=1);

namespace App\Domain\Game\Api;

use Illuminate\Support\Collection;

interface GameFinder
{
    public function findById(string $id): ?Game;

    public function findAll(): Collection;
}