<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_volunteers', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->change();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('volunteer_type_id')->change();
            $table->foreign('volunteer_type_id')->references('id')->on('volunteer_types');

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
        Schema::table('users_volunteers', function (BluePrint $table) {
            $table->dropForeign('users_volunteers_user_id_foreign');
            $table->dropForeign('users_volunteers_volunteer_type_id_foreign');
        });
    }
}
