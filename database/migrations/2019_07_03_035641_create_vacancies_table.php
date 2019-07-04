<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('description')->nullable();
            $table->text('qualification')->nullable();
            $table->integer('skill_id');
            $table->string('position')->nullable();
            $table->integer('company_id');
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('start_salary')->nullable();
            $table->string('end_salary')->nullable();
            $table->integer('job_type_id');
            $table->string('closing_date')->nullable();
            $table->integer('job_level_id');
            $table->integer('job_category_id');
            $table->integer('educational_level_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('vacancies');
    }
}
