<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerservices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('salon_id')->unsigned();
            $table->integer('voter_id')->unsigned();
            $table->string('client_name');
            $table->integer('meet_greet')->unsigned();
            $table->integer('consultation')->unsigned();
            $table->integer('main_service')->unsigned();
            $table->integer('retail')->unsigned();
            $table->integer('cleanliness')->unsigned();
            $table->integer('education')->unsigned();
            $table->integer('closing_sale')->unsigned();
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
        Schema::drop('customerservices');
    }
}
