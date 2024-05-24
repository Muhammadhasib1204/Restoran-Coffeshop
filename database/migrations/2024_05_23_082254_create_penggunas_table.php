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
        Schema::create('penggunas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 50);
            $table->string('email', 50);
            $table->string('password', 255);
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_pemilik');
            $table->unsignedBigInteger('id_customer');
            $table->timestamps();

            $table->foreign('id_admin')->references('id')->on('admins');
            $table->foreign('id_pemilik')->references('id')->on('pemiliks');
            $table->foreign('id_customer')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
