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
        /*DB::table('users')->insert([
            'name' => str_random(10),
            'email' =>'dk.harryadi@gmail.com',
            'password' => bcrypt('admin'),
        ]);
        */
        /*
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' =>'sangga1980@gmail.com',
            'password' => bcrypt('09Juli2001'),
        ]);
          */
             DB::table('users')->insert([
            'name' => str_random(10),
            'email' =>'sutrisnaalfarisi@gmail.com',
            'password' => bcrypt('Sutrisna1912'),
        ]);
    }
}
