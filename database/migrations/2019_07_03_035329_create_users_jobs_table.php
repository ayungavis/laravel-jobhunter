<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('potition')->nullable();
            $table->string('company')->nullable();
            $table->string('location')->nullable();
            $table->string('start_year')->nullable();
            $table->string('end_year')->nullable();
            $table->string('start_month')->nullable();
            $table->string('end_month')->nullable();
            $table->string('motto')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('users_jobs');
    }
}
