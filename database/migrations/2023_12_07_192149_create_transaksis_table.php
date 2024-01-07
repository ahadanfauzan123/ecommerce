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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_user')
                ->refereces('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('id_tiket')
                ->refereces('id')
                ->on('tikets')
                ->onDelete('cascade');
            $table->foreign('id_event')
                ->refereces('id')
                ->on('events')
                ->onDelete('cascade');
            $table->timestamps('tgl_trans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
