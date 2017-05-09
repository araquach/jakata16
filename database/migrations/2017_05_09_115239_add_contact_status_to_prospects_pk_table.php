<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContactStatusToProspectsPkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prospects_pk', function (Blueprint $table) {
            $table->string('contact_status')->after('opt_out')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prospects_pk', function (Blueprint $table) {
            $table->dropColumn('contact_status');
        });
    }
}
