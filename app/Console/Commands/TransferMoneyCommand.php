<?php

namespace App\Console\Commands;

use App\Jobs\TransferMoneyJob;
use App\Models\Prize;
use Illuminate\Console\Command;

/**
 * Class TransferMoneyCommand
 * @package App\Console\Commands
 */
class TransferMoneyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'prize:transfer {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Transfer money for clients';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $count = $this->argument('count');
        $prizes = Prize::where('prize_type', Prize::PRIZE_TYPE_MONEY)
            ->where('is_received', false)
            ->limit($count)
            ->get();

        foreach ($prizes as $prize) {
            dispatch(new TransferMoneyJob($prize));
        }
    }
}
