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
        Schema::create('request_surats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_surat');
            $table->string('priority');
            $table->date('tanggal_request');
            $table->text('deskripsi_surat');
            $table->string('tipe_surat');
            $table->string('penerima_surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
