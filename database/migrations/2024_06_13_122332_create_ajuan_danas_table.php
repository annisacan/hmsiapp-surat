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
            $table->decimal('total_pengeluaran', 15);
            $table->date('tanggal_nota');
            $table->string('status');
            $table->text('deskripsi_dana');
            $table->string('upload_nota')->nullable();
            $table->string('original_filename')->nullable()->change();
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
