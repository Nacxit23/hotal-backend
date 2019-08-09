<?php

use App\Models\RoomCategorie;
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
        RoomCategorie::create([
            'nameCategories' => 'Double room',
            'descripcion' => 'This room has two beds, air conditioning, bathroom, television',
        ]);
        RoomCategorie::create([
            'nameCategories' => 'Simple room',
            'descripcion' => 'This room has one beds, fan, bathroom, television',
        ]);
        RoomCategorie::create([
            'nameCategories' => 'Deluxe room',
            'descripcion' => 'This room has two beds, air conditioning,bathroom
            and bath, television, food free',
        ]);
    }
}
