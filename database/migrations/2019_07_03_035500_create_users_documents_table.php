<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name_of_document')->nullable();
            $table->string('issuing_organtitaion')->nullable();
            $table->string('start_year')->nullable();
            $table->string('end_year')->nullable();
            $table->string('start_month')->nullable();
            $table->string('end_month')->nullable();
            $table->integer('credential_id');
            $table->string('credential_url')->nullable();
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
        Schema::dropIfExists('users_documents');
    }
}
