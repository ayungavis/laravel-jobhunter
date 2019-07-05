<?php

use Illuminate\Database\Seeder;

class JobLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_levels')->insert([
        	'name' => 'Internship'
        ]);

        DB::table('job_levels')->insert([
        	'name' => 'Fresh Graduate'
        ]);

        DB::table('job_levels')->insert([
        	'name' => 'Associate'
        ]);

        DB::table('job_levels')->insert([
        	'name' => 'Mid-Senior Level'
        ]);

        DB::table('job_levels')->insert([
        	'name' => 'Director'
        ]);
    }
}
