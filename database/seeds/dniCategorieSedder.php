<?php

use App\Models\DniCategorie;
use Illuminate\Database\Seeder;

class dniCategorieSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DniCategorie::class, 20)->create();
    }
}
