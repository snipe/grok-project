<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'Snipe-IT Redesign',
            'company_id' => 1,
            'user_id' => 1,
            'dev_url' => 'https://grok-2018.local:8890',
            'staging_url' => 'https://new.grokability.com',
            'prod_url' => 'https://snipeitapp.com',
        ]);
    }
}
