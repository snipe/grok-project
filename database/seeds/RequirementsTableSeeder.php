<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequirementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requirements')->insert([
            'name' => 'Carousel',
            'description' => 'The new Snipe-IT homepage should have a carousel with three different panels that rotate.',
            'section_id' => 2,
            'project_id' => 1,
            'size' => 'M',
            'user_id' => 1,
        ]);

        DB::table('requirements')->insert([
            'name' => 'Features Requirement',
            'description' => 'The new Snipe-IT homepage should have a features seciton that breaks out six different features with blurbs and links to more detail.',
            'section_id' => 3,
            'project_id' => 1,
            'size' => 'S',
            'user_id' => 1,
        ]);

        DB::table('requirements')->insert([
            'name' => 'Testimonials',
            'description' => 'The new Snipe-IT homepage should have a randomly selected section with three testimonials that include a brief quote, the testimonial-giver name, and the company they work for.',
            'section_id' => 4,
            'project_id' => 1,
            'size' => 'S',
            'user_id' => 1,
        ]);
    }
}
