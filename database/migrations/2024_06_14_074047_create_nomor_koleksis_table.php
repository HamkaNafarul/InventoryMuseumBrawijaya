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
        Schema::create('nomor_koleksis', function (Blueprint $table) {
            $table->id();
            $table->string('no_inventaris')->unique();
            $table->string('no_registrasi')->unique();
            $table->foreignId('koleksi_id')->constrained('koleksi')->onDelete('cascade');
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
        Schema::dropIfExists('nomor_koleksis');
    }
};
