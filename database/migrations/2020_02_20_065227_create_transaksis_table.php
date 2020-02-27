<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->unsignedBigInteger('id_jenisbarang');
            $table->foreign('id_jenisbarang')->references('id')->on('jenisbarang')->onDelete('cascade');
            // $table->unsignedBigInteger('nama_boneka');
            // $table->foreign('id_jenisbarangs')->references('id')->on('jenisbarangs')->onDelete('cascade');
            $table->string('jumlah_boneka');
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
        Schema::dropIfExists('transaksis');
    }
}
