<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'name' => 'Homepage',
            'description' => 'The new Snipe-IT app homepage.',
            'project_id' => 1,
            'user_id' => 1,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);

        DB::table('sections')->insert([
            'name' => 'Features',
            'description' => 'This section details the product features. ',
            'project_id' => 1,
            'parent_id' => 1,
            'user_id' => 1,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);

        DB::table('sections')->insert([
            'name' => 'Carousel',
            'description' => 'Highlight of three major benefits.  ',
            'project_id' => 1,
            'parent_id' => 1,
            'user_id' => 1,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);

        DB::table('sections')->insert([
            'name' => 'Testimonals',
            'project_id' => 1,
            'parent_id' => 1,
            'user_id' => 1,
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
    }
}
