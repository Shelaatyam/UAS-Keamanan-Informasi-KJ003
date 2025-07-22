<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjasTable extends Migration
{
    public function up()
    {
        Schema::create('pekerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('keahlian'); // Keahlian pekerja (misalnya, mekanik, teknisi)
            $table->enum('status_pekerja', ['tersedia', 'sibuk'])->default('tersedia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pekerjas');
    }
}
