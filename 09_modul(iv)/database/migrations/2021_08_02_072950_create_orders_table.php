<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('email')->nullable();
            $table->bigInteger('nohp')->nullable();
            $table->text('alamat')->nullable();
            $table->string('metodepembayaran')->nullable();
            $table->text('rekening')->nullable();
            $table->text('order')->nullable();
            $table->bigInteger('totalorder')->nullable();
            $table->text('totalharga')->nullable();
            $table->text('kodeunik')->nullable();
            $table->string('bukti')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
