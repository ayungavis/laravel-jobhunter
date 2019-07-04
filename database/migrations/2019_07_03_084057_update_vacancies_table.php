<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacancies', function (Blueprint $table) {
            $table->unsignedInteger('skill_id')->change();
            $table->foreign('skill_id')->references('id')->on('skills');
            $table->unsignedInteger('company_id')->change();
            $table->foreign('company_id')->references('id')->on('companies');
            $table->unsignedInteger('job_type_id')->change();
            $table->foreign('job_type_id')->references('id')->on('job_types');
            $table->unsignedInteger('job_level_id')->change();
            $table->foreign('job_level_id')->references('id')->on('job_levels');
            $table->unsignedInteger('job_category_id')->change();
            $table->foreign('job_category_id')->references('id')->on('job_categories');
            $table->unsignedInteger('educational_level_id')->change();
            $table->foreign('educational_level_id')->references('id')->on('educational_levels');
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
        Schema::table('vacancies', function (BluePrint $table) {
            $table->dropForeign('vacancies_skill_id_foreign');
            $table->dropForeign('vacancies_company_id_foreign');
            $table->dropForeign('vacancies_job_type_id_foreign');
            $table->dropForeign('vacancies_job_level_id_foreign');
            $table->dropForeign('vacancies_job_category_id_foreign');
            $table->dropForeign('vacancies_educational_level_id_foreign');
        });
    }
}
