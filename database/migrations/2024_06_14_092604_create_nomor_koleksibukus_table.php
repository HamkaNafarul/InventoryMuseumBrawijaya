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
        Schema::create('nomor_koleksibukus', function (Blueprint $table) {
            $table->id();
            $table->string('no_inventaris_buku')->unique();
            $table->string('no_registrasi_buku')->unique();
            $table->foreignId('koleksibuku_id')->constrained('koleksibuku')->onDelete('cascade');
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
        Schema::dropIfExists('nomor_koleksibukus');
    }
};
