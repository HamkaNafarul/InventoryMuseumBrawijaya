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
                $table->string('no_inventaris')->unique();
                $table->string('nama_barang');
                $table->string('asal_ditemukan');
                $table->string('cara_didapat');
                $table->text('deskripsi');
                $table->text('keterangan');
                $table->string('ukuran');
                $table->string('tahun_abad_masa');
                $table->string('gambar'); // Kolom gambar
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
