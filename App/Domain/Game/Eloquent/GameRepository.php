<?php

declare(strict_types=1);

namespace App\Domain\Game\Eloquent;


use app\Domain\Game\Api\Game;
use DB;
use Exception;
use Illuminate\Support\Collection;
use Override;

class GameRepository implements \App\Domain\Game\Model\GameRepository
{
    /** @throws Exception */
    #[Override] public function findById(string $id): ?Game
    {
        $game = DB::table('games')->where('id', $id)->first();
        if ($game instanceof Game) {
            return $game;
        }
        throw new Exception('xD repository game');
    }

    #[Override] public function findAll(): Collection
    {
        return DB::table('games')->get();
    }
}