<?php

use Illuminate\Database\Seeder;

class JobCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_categories')->insert([
        	'name' => 'Human Resources'
        ]);

        DB::table('job_categories')->insert([
        	'name' => 'IT and Software'
        ]);

        DB::table('job_categories')->insert([
        	'name' => 'Legal'
        ]);

        DB::table('job_categories')->insert([
        	'name' => 'General Services'
        ]);

        DB::table('job_categories')->insert([
        	'name' => 'Customer Service'
        ]);
    }
}
