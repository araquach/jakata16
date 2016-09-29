<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnTypeOnApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apprentices', function ($table) {
            $table->string('qualification_school')->change();
            $table->string('qualification_hair')->change();
            $table->text('about')->change();
            $table->text('why_hairdressing')->change();
            $table->text('why_us')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apprentices', function ($table) {
            $table->integer('qualification_school')->change();
            $table->integer('qualification_hair')->change();
            $table->string('about')->change();
            $table->string('why_hairdressing')->change();
            $table->string('why_us')->change();
        });
    }
}
