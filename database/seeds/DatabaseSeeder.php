<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(creditCardSedder::class);
        $this->call(dniCategorieSedder::class);
        $this->call(roomCategorieSedder::class);
        $this->call(UserSeeder::class);

    }
}
