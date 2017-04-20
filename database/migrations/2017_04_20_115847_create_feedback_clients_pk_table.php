<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackClientsPkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_clients_pk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('iris_id');
            $table->string('stylist');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile');
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
        Schema::drop('feedback_clients_pk');
    }
}