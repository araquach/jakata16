<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeWhyJakToWhyUsOnApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apprentices', function ($table) {
            $table->renameColumn('why_jakata', 'why_us');
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
            $table->renameColumn('why_us', 'why_jakata');
        });
    }
}
