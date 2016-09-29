<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableColumnsToApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apprentices', function ($table) {
            $table->string('address2')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('salon_name')->nullable()->change();
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
            $table->string('address2')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->string('salon_name')->nullable(false)->change();
        });
    }
}
