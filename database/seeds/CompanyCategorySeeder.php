<?php

use Illuminate\Database\Seeder;

class CompanyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_categories')->insert([
        	'name' => 'Industry'
        ]);

        DB::table('company_categories')->insert([
        	'name' => 'Business'
        ]);

        DB::table('company_categories')->insert([
        	'name' => 'Bank'
        ]);

        DB::table('company_categories')->insert([
        	'name' => 'Contractor'
        ]);

        DB::table('company_categories')->insert([
        	'name' => 'Mining'
        ]);
    }
}
