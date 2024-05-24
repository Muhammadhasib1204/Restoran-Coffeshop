<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tokos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_toko', 50);
            $table->string('alamat', 50);
            $table->unsignedBigInteger('id_pemilik');
            $table->timestamps();

            $table->foreign('id_pemilik')->references('id')->on('pemiliks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokos');
    }
};
