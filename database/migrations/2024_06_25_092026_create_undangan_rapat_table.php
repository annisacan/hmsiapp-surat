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
        Schema::create('undangan_rapat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_urut');
            $table->string('tujuan_surat');
            $table->string('nama_proker');
            $table->string('bulan_surat');
            $table->string('lampiran');
            $table->string('hal');
            $table->date('tanggal_surat');
            $table->string('penerima_undangan');
            $table->string('alamat_penerima');
            $table->string('isi_surat', 1000);
            $table->date('tanggal_acara');
            $table->string('waktu');
            $table->string('tempat');
            $table->string('nama_pengirim');
            $table->string('nim_pengirim');
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
        Schema::dropIfExists('undangan_rapat');
    }
};
