<?php

use App\Models\PresentTypes;
use Illuminate\Database\Seeder;

/**
 * Class PresentTypesSeeder
 */
class PresentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PresentTypes::create(['name' => 'car', 'quantity' => 100]);
        PresentTypes::create(['name' => 'hat', 'quantity' => 10]);
        PresentTypes::create(['name' => 'beer', 'quantity' => 1]);
    }
}
