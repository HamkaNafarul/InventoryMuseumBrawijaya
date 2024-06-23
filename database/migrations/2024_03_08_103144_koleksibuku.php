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
            Schema::create('koleksibuku', function (Blueprint $table) {
                $table->id(); 
                $table->string('judul');
                $table->string('pengarang')->nullable();
                $table->string('edisi')->nullable();
                $table->string('tahun_terbit')->nullable();
                $table->string('issn')->nullable();
                $table->string('penerbit')->nullable();
                $table->string('tempat_terbit')->nullable();
                $table->string('kualifikasi')->nullable();
                $table->string('bahasa')->nullable();
                $table->longText('abstrak')->nullable();
                $table->string('subjek')->nullable();
                $table->string('sampul')->nullable(); // Kolom gambar
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
        Schema::dropIfExists('koleksibuku');
    }
};

