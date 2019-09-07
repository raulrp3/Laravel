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
        $professionId = Db::table('professions')->where(['title' => 'Desarrollador front-end'])->value('id');

        DB::table('users')->insert([
            'name' => 'Raúl Ramírez Pérez',
            'email' => 'raulramper003@gmail.com',
            'password' => bcrypt('usuario'),
            'profession_id' => $professionId
        ]);
    }
}
