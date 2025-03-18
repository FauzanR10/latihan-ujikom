<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('identitas', function (Blueprint $table) {
            $table->id('id_identitas');
            $table->string('nama_identitas');
            $table->string('badan_hukum');
            $table->string('npwp')->unique();
            $table->string('email')->unique();
            $table->string('url')->nullable();
            $table->text('alamat');
            $table->string('telp')->nullable();
            $table->string('fax')->nullable();
            $table->string('rekening')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identitas');
    }
};
