<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Raúl Ramírez Pérez',
            'email' => 'raulramper003@gmail.com',
            'password' => bcrypt('usuario')
        ]);
    }
}
