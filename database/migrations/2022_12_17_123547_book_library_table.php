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
        //table for mysql
        Schema::create('spesifikasiBuku', function (Blueprint $table) {
             $table->id();
             $table->timestamps();
             $table->string('namaBuku');
             $table->string('penulis');
             $table->string('bahasa');
             $table->string('halaman');
             $table->string('ISBN');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
