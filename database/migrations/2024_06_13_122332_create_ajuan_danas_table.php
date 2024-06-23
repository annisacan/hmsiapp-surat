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
        Schema::create('ajuan_danas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dana');
            $table->decimal('total_pengeluaran', 15, 2);
            $table->date('tanggal_nota');
            $table->text('deskripsi_dana');
            $table->string('upload_nota')->nullable();
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
        Schema::dropIfExists('ajuan_danas');
    }
};
