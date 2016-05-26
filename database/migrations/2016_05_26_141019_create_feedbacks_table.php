<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('date');
            $table->integer('intro');
            $table->integer('consultation');
            $table->integer('styling_area');
            $table->integer('stylist_appearance');
            $table->integer('prod_advice');
            $table->integer('styling_advice');
            $table->integer('mkt1')->nullable();
            $table->integer('mkt2')->nullable();
            $table->integer('mkt3')->nullable();
            $table->integer('value_for_money');
            $table->integer('whole_experience');
            $table->integer('end_result');
            $table->string('extra')->nullable();
            $table->string('extra_edit')->nullable();
            $table->integer('client_id');
            $table->boolean('allow')->nullable();
            $table->boolean('publish')->nullable();
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
        Schema::drop('feedbacks');
    }
}
