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
        $this->call(UsersTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(RequirementsTableSeeder::class);
        $this->call(TestEnvsTableSeeder::class);
        $this->call(ProjectTestenvsTableSeeder::class);
        $this->call(TestCasesTableSeeder::class);
        $this->call(TestCaseResultsTableSeeder::class);

    }
}
