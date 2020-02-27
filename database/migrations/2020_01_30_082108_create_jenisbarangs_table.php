<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateJenisbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('jenisbarangs', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('nama_boneka');
        //     $table->string('bahan');
        //     $table->string('harga');
        //     $table->string('gambar');
        //     $table->timestamps();
        // });


        Schema::create('jenisbarang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_kategoris');
            $table->foreign('id_kategoris')->references('id')->on('kategoris')->onDelete('cascade');
            $table->string('nama_boneka');
            $table->string('bahan');
            $table->string('harga');
            $table->string('stok');
            $table->string('gambar');
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
        Schema::dropIfExists('jenisbarangs');
    }
}
