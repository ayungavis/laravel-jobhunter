<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class VacanciesSeeder extends Seeder
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
            DB::table('vacancies')->insert([
                'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'qualification' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'skill_id' => $i,
                'position' => $faker->jobTitle,
                'company_id' => $i,
                'city' => $faker->city,
                'country' => $faker->country,
                'start_salary' => $faker->randomNumber($nbDigits = 6, $strict = false),
                'end_salary' => $faker->randomNumber($nbDigits = 7, $strict = false),
                'job_type_id' => $i,
                'closing_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'job_level_id' => $i,
                'job_category_id' => $i,
                'educational_level_id' => $i
            ]);
        }  
    }
}
