<?php

use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
        	'name' => 'PHP'
        ]);

        DB::table('skills')->insert([
        	'name' => 'JavaScript'
        ]);

        DB::table('skills')->insert([
        	'name' => 'MySQL'
        ]);

        DB::table('skills')->insert([
        	'name' => 'PostgreSQL'
        ]);

        DB::table('skills')->insert([
        	'name' => 'HTML'
        ]);
    }
}
