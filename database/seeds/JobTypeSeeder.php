<?php

use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_types')->insert([
        	'name' => 'Internship'
        ]);

        DB::table('job_types')->insert([
        	'name' => 'Full Time'
        ]);

        DB::table('job_types')->insert([
        	'name' => 'Part Time'
        ]);

        DB::table('job_types')->insert([
        	'name' => 'Contractual'
        ]);

        DB::table('job_types')->insert([
        	'name' => 'Freelancer'
        ]);
    }
}
