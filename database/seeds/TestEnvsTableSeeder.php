<?php

use Illuminate\Database\Seeder;

class TestEnvsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_envs')->insert([
            'env_type' => 'Desktop',
            'browser' => 'Safari',
            'browser_version' => '11.1.1',
            'os' => 'MacOS',
            'os_version' => '10.13.5',
            'company_id' => 1,
        ]);

        DB::table('test_envs')->insert([
            'env_type' => 'Desktop',
            'browser' => 'Opera',
            'browser_version' => '0.22.727',
            'os' => 'MacOS',
            'os_version' => '10.13.5',
            'company_id' => 1,
        ]);

        DB::table('test_envs')->insert([
            'env_type' => 'Desktop',
            'browser' => 'Chrome',
            'browser_version' => '66.0',
            'os' => 'MacOS',
            'os_version' => '10.13.5',
            'company_id' => 1,
        ]);

        DB::table('test_envs')->insert([
            'env_type' => 'Desktop',
            'browser' => 'Edge',
            'browser_version' => '9.8',
            'os' => 'Windows',
            'os_version' => '10',
            'company_id' => 1,
        ]);

        DB::table('test_envs')->insert([
            'env_type' => 'Tablet',
            'browser' => 'Safari',
            'browser_version' => '9.8',
            'os' => 'iOS',
            'os_version' => '12',
            'company_id' => 1,
        ]);

        DB::table('test_envs')->insert([
            'env_type' => 'Phone',
            'browser' => 'Safari',
            'browser_version' => '9.8',
            'os' => 'iOS',
            'os_version' => '12',
            'company_id' => 1,
        ]);

    }
}
