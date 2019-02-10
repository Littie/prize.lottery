<?php

namespace App\Http\Controllers;

use App\Services\PrizeGenerator\PrizeGenerateInterface;

/**
 * Class PrizeController
 * @package App\Http\Controllers
 */
class PrizeController extends Controller
{
    /**
     * Show prize page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $prize = \Auth::user()->prize;

        return view('prize.generate', ['prize' => $prize]);
    }

    /**
     * Generate prize for user.
     *
     * @param PrizeGenerateInterface $generator
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function generate(PrizeGenerateInterface $generator)
    {
        $prize = $generator->generate();

        return view('prize.generate', ['prize' => $prize]);
    }
}
