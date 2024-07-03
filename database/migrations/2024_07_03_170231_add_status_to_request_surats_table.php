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
        Schema::table('request_surats', function (Blueprint $table) {
            if(!Schema::hasColumn('request_surats', 'status')){
                $table->String('status')->after('penerima_surat');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_surats', function (Blueprint $table) {
            if(Schema::hasColumn('request_surats', 'status')){
                $table->dropColumn('status');
            }
        });
    }
};
