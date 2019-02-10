<?php

namespace App\Jobs;

use App\Models\Prize;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

/**
 * Class TransferMoneyJob
 * @package App\Jobs
 */
class TransferMoneyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** @var Prize $prize */
    protected $prize;

    /**
     * Create a new job instance.
     *
     * @param Prize $prize
     */
    public function __construct(Prize $prize)
    {
        $this->prize = $prize;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $result = \MoneyHandler::transfer($this->prize);

        // Output result to console.
        dump($result);
    }
}
