<?php

namespace App\Http\Controllers;

use App\Actions\Game\Api\GetGamesAction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

final class GetGamesController extends Controller
{
    public function __construct(
        private readonly GetGamesAction $getGamesAction
    ) {
    }

    /** @throws Throwable */
    public function do(Request $request): string
    {
        try {
            DB::beginTransaction();
            $games = $this->getGamesAction->do();
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception('xd');
        } catch (Throwable $e) {
        }
        DB::commit();
        return $games;
    }
}
