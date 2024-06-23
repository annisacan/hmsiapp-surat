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
        Schema::create('kirim_surats', function (Blueprint $table) {
            $table->id();
            $table->string('nama_surat');
            $table->string('pengirim_surat');
            $table->date('waktu_kegiatan');
            $table->string('nama_kegiatan');
            $table->text('deskripsi_surat');
            $table->string('upload_surat')->nullable();
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
        Schema::dropIfExists('kirim_surats');
    }
};
