<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('level_id')->nullable();
            $table->unsignedInteger('religion_id')->nullable();

            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('cascade');
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
        Schema::table('users', function (BluePrint $table) {
            $table->dropForeign('users_level_id_foreign');
            $table->dropForeign('users_religion_id_foreign');
        });
    }
}
