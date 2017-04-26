<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsPkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects_pk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('mobile');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('town');
            $table->string('postcode');
            $table->boolean('regular')->nullable();
            $table->string('texture');
            $table->string('condition');
            $table->integer('cut_spend')->unsigned();
            $table->integer('colour_spend')->unsigned();
            $table->string('gender');
            $table->boolean('opt_out')->nullable();
            $table->dateTime('products_sent')->nullable();
            $table->dateTime('message_sent')->nullable();
            $table->integer('prospect_type')->unsigned();
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
        Schema::drop('prospects_pk');
    }
}
