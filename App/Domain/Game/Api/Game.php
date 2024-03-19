<?php

declare(strict_types=1);

namespace App\Domain\Game\Api;

interface Game
{
    public function getName(): string;
}