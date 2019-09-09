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
        $anotherProfessionId = Profession::where('title', 'Desarrollador front-end')->value('id');

        User::create([
            'name' => 'Raúl Ramírez Pérez',
            'email' => 'raulramper003@gmail.com',
            'password' => bcrypt('usuario'),
            'profession_id' => $professionId,
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Another user',
            'email' => 'anotheruser@gmail.com',
            'password' => bcrypt('usuario'),
            'profession_id' => $anotherProfessionId,
            'is_admin' => false
        ]);
    }
}
