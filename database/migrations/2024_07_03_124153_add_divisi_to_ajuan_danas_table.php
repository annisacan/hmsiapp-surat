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
            if (!Schema::hasColumn('ajuan_danas', 'divisi')) {
                $table->string('divisi')->after('status'); // Add the column
            } // Add divisi column
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
            if (Schema::hasColumn('ajuan_danas', 'divisi')) {
                $table->dropColumn('divisi');
            }
        });
    }
};
