<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogParasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_paras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_id');
            $table->text('para');
            $table->string('para_pic')->nullable();
            $table->string('para_pic_alt')->nullable();
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
        Schema::drop('blog_paras');
    }
}
