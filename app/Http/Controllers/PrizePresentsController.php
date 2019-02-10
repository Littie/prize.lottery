<?php

namespace App\Http\Controllers;

use App\Models\Prize;
use Illuminate\Http\Request;

/**
 * Class PrizePresentsController
 * @package App\Http\Controllers
 */
class PrizePresentsController extends Controller
{
    /**
     * Handle present prize.
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
            case 'deliver':
                return $this->deliver($prize);
                break;
            case 'refuse':
                return $this->refuse($prize);
                break;
        }
    }

    /**
     * Deliver prize to user.
     *
     * @param Prize $prize
     *
     * @return mixed
     */
    private function deliver(Prize $prize)
    {
        return \PresentsHandler::deliver($prize);
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
        return \PresentsHandler::refuse($prize);
    }
}
