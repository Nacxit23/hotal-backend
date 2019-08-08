<?php

use App\Model\Room_categorie;
use Illuminate\Database\Seeder;

class roomCategorieSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room_categorie::create([
            'nameCategories' => 'Double room',
            'descripcion' => 'This room has two beds, air conditioning, bathroom, television',
        ]);
        Room_categorie::create([
            'nameCategories' => 'Simple room',
            'descripcion' => 'This room has one beds, fan, bathroom, television',
        ]);
        Room_categorie::create([
            'nameCategories' => 'Deluxe room',
            'descripcion' => 'This room has two beds, air conditioning,bathroom
            and bath, television, food free',
        ]);
    }
}
