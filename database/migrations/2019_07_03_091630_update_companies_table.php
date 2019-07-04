<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->unsignedInteger('company_category_id')->change();
            $table->foreign('company_category_id')->references('id')->on('company_categories')->onDelete('cascade');
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
        Schema::table('companies', function (BluePrint $table) {
            $table->dropForeign('companies_company_category_id_foreign');
            $table->foreign('company_category_id')->references('id')->on('company_categories')->onDelete('cascade')->change();
        });
    }
}
