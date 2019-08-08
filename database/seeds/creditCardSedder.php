<?php

use App\Model\Credit_card;
use Illuminate\Database\Seeder;

class creditCardSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Credit_card::class, 20)->create();
    }
}
