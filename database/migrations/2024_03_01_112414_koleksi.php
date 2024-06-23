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
        //
        {
            Schema::create('koleksi', function (Blueprint $table) {
                $table->id(); 
                $table->string('nama_barang');
                $table->string('asal_ditemukan')->nullable();
                $table->string('cara_didapat')->nullable();
                $table->longText('deskripsi')->nullable();
                $table->longText('keterangan')->nullable();
                $table->string('ukuran')->nullable();
                $table->string('tahun_abad_masa')->nullable();
                $table->string('gambar')->nullable(); // Kolom gambar
                $table->timestamps();
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('koleksi');
    }
};
