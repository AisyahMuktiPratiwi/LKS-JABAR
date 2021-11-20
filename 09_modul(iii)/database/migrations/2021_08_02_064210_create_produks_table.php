<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('kategori')->nullable();
            $table->integer('stok')->nullable();
            $table->text('prosesor')->nullable();
            $table->text('ram')->nullable();
            $table->text('ukuranlayar')->nullable();
            $table->string('warna')->nullable();
            $table->text('harga')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('produks');
    }
}
