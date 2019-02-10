<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use Illuminate\Http\Request;

/**
 * Class PrizeMoneyController
 * @package App\Http\Controllers
 */
class PrizeMoneyController extends Controller
{
    /**
     * Handle money prize.
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
                return $this->transferMoney($prize);
                break;
            case 'convert':
                return $this->convertMoney($prize);
            case 'refuse':
                return $this->refuse($prize);
                break;
        }
    }

    /**
     * Transfer money to user account.
     *
     * @param Prize $prize
     *
     * @return mixed
     */
    private function transferMoney(Prize $prize)
    {
        return \MoneyHandler::transfer($prize);
    }

    /**
     * Convert money to points.
     *
     * @param Prize $prize
     *
     * @return mixed
     */
    private function convertMoney(Prize $prize)
    {
        return \MoneyHandler::convert($prize);
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
        return \MoneyHandler::refuse($prize);
    }
}
