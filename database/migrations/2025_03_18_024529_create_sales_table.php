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
        Schema::create('sales', function (Blueprint $table) {
            $table->id('id_sales');
            $table->unsignedBigInteger('id_customer');
            $table->date('tgl_sales');
            $table->foreignId('id_customer')->constrained('customers')->onDelete('cascade');
            $table->string('do_number');
            $table->enum('status', ['pending', 'completed', 'cancelled']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
