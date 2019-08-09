<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => "Nacxit Armando",
            'last_name' => "Mayorga Espinal",
            'year_old' => 25,
            'nationality' => "Nicaragua",
            'gender' => 'Masculino',
            'dni_category_id' => 2,
            'creditCard_id' => 2,
            'email' => "tierrasalvaje_02@hotmail.com",
            'password' => bcrypt("barselona123"),
        ]);
    }
}
