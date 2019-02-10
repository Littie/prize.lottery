<?php

namespace Tests\Feature;

use App\Models\User;
use App\Services\PrizeGenerator\Prizes\MoneyPrize;
use Tests\TestCase;

/**
 * Class MoneyHandlerServiceTest
 * @package Tests\Feature
 */
class MoneyHandlerServiceTest extends TestCase
{
    public function testConvertMoneyToPoints()
    {
        $user = factory(User::class)->make(['id' => 1]);

        $sum = 1000;
        $ration = config('prize.points.ration');

        $result = 'Money was converted to points. You have ' . $sum * $ration . ' points';

        $prize = (new MoneyPrize($user))->createPrize();
        $prize->prizeable->update(['sum' => $sum]);

        $this->assertEquals($result, \MoneyHandler::convert($prize));
    }
}
