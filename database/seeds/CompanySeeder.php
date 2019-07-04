<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 5; $i++) {
            DB::table('companies')->insert([
                'name' => $faker->company,
                'photo_profile' => 'default_photo.png',
                'photo_header' => 'default_header.png',
                'city' => $faker->city,
                'country' => $faker->country,
                'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'website' => $faker->url,
                'company_category_id' => $i
            ]);
        }
    }
}
