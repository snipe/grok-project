<?php

use Illuminate\Database\Seeder;

class ProjectTestenvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects_test_envs')->insert([
            'project_id' => 1,
            'test_env_id' => 1,
        ]);

        DB::table('projects_test_envs')->insert([
            'project_id' => 1,
            'test_env_id' => 2,
        ]);

        DB::table('projects_test_envs')->insert([
            'project_id' => 1,
            'test_env_id' => 3,
        ]);

        DB::table('projects_test_envs')->insert([
            'project_id' => 1,
            'test_env_id' => 4,
        ]);

        DB::table('projects_test_envs')->insert([
            'project_id' => 1,
            'test_env_id' => 5,
        ]);
    }
}
