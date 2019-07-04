<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCompaniesSocialMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies_social_medias', function (Blueprint $table) {
            $table->unsignedInteger('social_media_id')->change();
            $table->foreign('social_media_id')->references('id')->on('social_medias');
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
        Schema::table('companies_social_medias', function (BluePrint $table) {
            $table->dropForeign('companies_social_medias_social_media_id_foreign');
        });
    }
}
