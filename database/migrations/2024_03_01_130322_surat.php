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
        Schema::create('surat', function (Blueprint $table) {
            $table->id(); 
            $table->string('nomor_hp');
            $table->string('nama');
            $table->string('asal_intansi');
            $table->date('tanggal');
            $table->tinyInteger('status')->comment('0:menunggu,1:diterima');
            $table->string('file'); // Kolom gambar
            $table->unsignedBigInteger('kategori_surat_id');
            $table->foreign('kategori_surat_id')->references('id')->on('kategori_surat');
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
        Schema::dropIfExists('surat');
    }
};
