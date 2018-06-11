<?php

use Illuminate\Database\Seeder;

class UsersProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users_projects')->insert([
            'project_id' => 1,
            'user_id' => 1,
        ]);

        DB::table('users_companies')->insert([
            'company_id' => 1,
            'user_id' => 1,
            'user_role' => 'admin',
        ]);

        DB::table('users_projects')->insert([
            'project_id' => 1,
            'user_id' => 2,
        ]);

        DB::table('users_companies')->insert([
            'company_id' => 1,
            'user_id' => 2,
            'user_role' => 'admin',
        ]);

        DB::table('users_projects')->insert([
            'project_id' => 1,
            'user_id' => 3,
        ]);

        DB::table('users_companies')->insert([
            'company_id' => 1,
            'user_id' => 3,
            'user_role' => 'admin',
        ]);


    }
}
