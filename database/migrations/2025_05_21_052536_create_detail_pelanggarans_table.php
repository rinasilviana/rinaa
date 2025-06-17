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
        Schema::create('detail_pelanggarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pelanggar');
            $table->bigInteger('id_pelanggaran');
            $table->bigInteger('id_user');
            $table->bigInteger('status'); //1 = sudah diberikan konsekuensi ,0 = belum
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pelanggarans');
    }
};
