<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professionId = Profession::where('title', 'Desarrollador back-end')->value('id');

        User::create([
            'name' => 'Raúl Ramírez Pérez',
            'email' => 'raulramper003@gmail.com',
            'password' => bcrypt('usuario'),
            'profession_id' => $professionId
        ]);
    }
}
