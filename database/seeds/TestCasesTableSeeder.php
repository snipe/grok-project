<?php

use Illuminate\Database\Seeder;

class TestCasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_cases')->insert([
            'auth_status' => 0,
            'am_on' => 'Homepage ',
            'url' => 'https://new.grokability.com ',
            'action' => 'see',
            'element' => 'carousel',
            'should_see' => 'three panels, all smoothly auto-advancing at the same speed',
            'requirement_id' => 1,
            'user_id' => 1,
        ]);


        DB::table('test_cases')->insert([
            'auth_status' => 0,
            'am_on' => 'Homepage ',
            'url' => 'https://new.grokability.com ',
            'action' => 'see',
            'element' => 'carousel',
            'should_see' => 'tesimonials',
            'requirement_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('test_cases')->insert([
            'auth_status' => 0,
            'am_on' => 'Homepage ',
            'url' => 'https://new.grokability.com ',
            'action' => 'see',
            'element' => 'testimonials',
            'should_see' => 'three panels, all smoothly auto-advancing at the same speed',
            'requirement_id' => 3,
            'user_id' => 1,
        ]);


        DB::table('test_cases')->insert([
            'auth_status' => 1,
            'am_on' => 'Homepage ',
            'url' => 'https://new.grokability.com ',
            'action' => 'see',
            'element' => 'carousel',
            'should_see' => 'three panels, all smoothly auto-advancing at the same speed',
            'requirement_id' => 1,
            'user_id' => 1,
        ]);


        DB::table('test_cases')->insert([
            'auth_status' => 1,
            'am_on' => 'Homepage ',
            'url' => 'https://new.grokability.com ',
            'action' => 'see',
            'element' => 'carousel',
            'should_see' => 'tesimonials',
            'requirement_id' => 2,
            'user_id' => 1,
        ]);

        DB::table('test_cases')->insert([
            'auth_status' => 1,
            'am_on' => 'Homepage ',
            'url' => 'https://new.grokability.com ',
            'action' => 'see',
            'element' => 'testimonials',
            'should_see' => 'three panels, all smoothly auto-advancing at the same speed',
            'requirement_id' => 3,
            'user_id' => 1,
        ]);

    }
}
