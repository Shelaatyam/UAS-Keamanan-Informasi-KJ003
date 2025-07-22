<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerbaikansTable extends Migration
{
    public function up()
    {
        Schema::create('perbaikans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kendaraan_id');
            $table->unsignedBigInteger('pekerja_id');
            $table->foreign('kendaraan_id')->references('id')->on('kendaraans')->onDelete('cascade');
            $table->foreign('pekerja_id')->references('id')->on('pekerjas')->onDelete('cascade');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable(); // Tanggal selesai perbaikan
            $table->enum('status', ['proses', 'selesai'])->default('proses'); // Status perbaikan
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perbaikans');
    }
}
