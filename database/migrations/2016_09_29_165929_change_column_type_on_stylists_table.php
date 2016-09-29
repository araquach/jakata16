<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnTypeOnStylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stylists', function (Blueprint $table) {
            $table->string('awards')->change();
            $table->integer('adex_stock')->change();
            $table->integer('adex_cservice')->change();
            $table->integer('adex_manage')->change();
            $table->integer('adex_marketing')->change();
            $table->integer('adex_reception')->change();
            $table->integer('adex_train')->change();
            $table->text('about_you')->change();
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
        Schema::table('stylists', function (Blueprint $table) {
            $table->string('awards')->change();
            $table->string('adex_stock')->change();
            $table->string('adex_cservice')->change();
            $table->string('adex_manage')->change();
            $table->string('adex_marketing')->change();
            $table->string('adex_reception')->change();
            $table->string('adex_train')->change();
            $table->string('about_you')->change();
            $table->string('why_hairdressing')->change();
            $table->string('why_us')->change();
        });
    }
}
