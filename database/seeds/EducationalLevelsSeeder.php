<?php

use Illuminate\Database\Seeder;

class EducationalLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educational_levels')->insert([
        	'name' => 'SMK/SMA'
        ]);

        DB::table('educational_levels')->insert([
        	'name' => 'S1'
        ]);

        DB::table('educational_levels')->insert([
        	'name' => 'D3'
        ]);

        DB::table('educational_levels')->insert([
        	'name' => 'D4'
        ]);

        DB::table('educational_levels')->insert([
        	'name' => 'S2'
        ]);
    }
}
