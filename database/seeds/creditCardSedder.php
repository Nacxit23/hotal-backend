<?php

use App\Models\CreditCard;
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
        factory(CreditCard::class, 20)->create();
    }
}
