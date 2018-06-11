<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'A. Gianotto',
            'email' => 'snipe@snipe.net',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Joey Fataboomboom',
            'email' => 'snipe+joey@snipe.net',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Tony Soprano',
            'email' => 'snipe+tony@snipe.net',
            'password' => bcrypt('password'),
        ]);
    }
}
