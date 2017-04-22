<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnsFromStringToTextOnFeedbackPk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedbacks_pk', function (Blueprint $table) {
            $table->text('extra')->change();
            $table->text('extra_edit')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feedbacks_pk', function (Blueprint $table) {
            $table->string('extra')->change();
            $table->string('extra_edit')->change();
        });
    }
}
