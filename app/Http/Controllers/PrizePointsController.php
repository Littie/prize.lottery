<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use Illuminate\Http\Request;

/**
 * Class PrizePointsController
 * @package App\Http\Controllers
 */
class PrizePointsController extends Controller
{
    /**
     * Handle point prize.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function handle(Request $request)
    {
        $answer = $request->get('button');
        $prize = \Auth::user()->prize;

        switch ($answer) {
            case 'transfer':
                return $this->transferPoints($prize);
                break;
            case 'refuse':
                return $this->refuse($prize);
                break;
        }
    }

    /**
     * Transfer points to accounts.
     *
     * @param Prize $prize
     *
     * @return mixed
     */
    private function transferPoints(Prize $prize)
    {
        return \PointsHandler::transfer($prize);
    }

    /**
     * Refuse to get prize.
     *
     * @param Prize $prize
     *
     * @return mixed
     */
    private function refuse(Prize $prize)
    {
        return \PointsHandler::refuse($prize);
    }
}
