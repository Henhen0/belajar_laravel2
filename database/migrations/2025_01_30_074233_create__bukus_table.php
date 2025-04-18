<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bukus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_buku');
            $table->string('harga');
            $table->integer('stok');
            $table->string('image');
            $table->unsignedBigInteger('id_penerbit');
            $table->date('tanggal_terbit');       
            $table->unsignedBigInteger('id_genre');
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
        Schema::dropIfExists('Bukus');
    }
};
