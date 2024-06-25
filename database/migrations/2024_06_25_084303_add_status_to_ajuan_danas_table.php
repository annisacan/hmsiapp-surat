<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ajuan_danas', function (Blueprint $table) {
            $table->string('status')->after('tanggal_nota'); // Add the column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ajuan_danas', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
