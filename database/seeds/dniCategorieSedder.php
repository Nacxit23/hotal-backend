<?php

use App\Model\Dni_categorie;
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
        factory(Dni_categorie::class, 20)->create();
    }
}
