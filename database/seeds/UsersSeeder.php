<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
        	'first_name' => 'ivana',
        	'last_name' => 'hani',
        	'username' => 'haniivn',
        	'email' => 'ivanahani@gmail.com',
        	'password' => 'password'
        ]);

        DB::table('users')->insert([
        	'first_name' => 'Ayung',
        	'last_name' => 'Avis',
        	'username' => 'ayungavis',
        	'email' => 'ayungavis@gmail.com',
        	'password' => 'password'
        ]);
    }
}
