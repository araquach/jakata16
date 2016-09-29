<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableColumnsToStylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stylists', function (Blueprint $table) {
            $table->string('address2')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('current_emp_des')->nullable()->change();
            $table->string('qual_non_hair')->nullable()->change();
            $table->integer('adex_stock')->nullable()->change();
			$table->integer('adex_manage')->nullable()->change();
			$table->integer('adex_train')->nullable()->change();
			$table->integer('adex_reception')->nullable()->change();
			$table->integer('adex_marketing')->nullable()->change();
			$table->integer('adex_cservice')->nullable()->change();
			$table->string('awards')->nullable()->change();
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
            $table->string('address2')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->string('current_emp_des')->nullable(false)->change();
            $table->string('qual_non_hair')->nullable(false)->change();
            $table->string('adex_stock')->nullable(false)->change();
			$table->string('adex_manage')->nullable(false)->change();
			$table->string('adex_train')->nullable(false)->change();
			$table->string('adex_reception')->nullable(false)->change();
			$table->string('adex_marketing')->nullable(false)->change();
			$table->string('adex_cservice')->nullable(false)->change();
			$table->string('awards')->nullable(false)->change();
        });
    }
}
