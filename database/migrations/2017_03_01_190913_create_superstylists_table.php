<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperstylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superstylists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('salon_id')->unsigned();
            $table->integer('client_care_own')->unsigned();
            $table->integer('client_care_others')->unsigned();
            $table->integer('help_availability')->unsigned();
            $table->integer('pos_mentality')->unsigned();
            $table->integer('proactive')->unsigned();
            $table->integer('passion')->unsigned();
            $table->integer('work_quality')->unsigned();
            $table->integer('educate_clients')->unsigned();
            $table->integer('convers_on_client')->unsigned();
            $table->integer('overall_rating')->unsigned();
            $table->text('extra')->nullable();
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
        Schema::drop('superstylists');
    }
}
