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
        // untuk membuat tabel peminjamanbuku beserta fieldnya
        Schema::create('peminjamanbuku', function (Blueprint $table) {
            $table->id();
            $table->date('pinjam_date');
            $table->date('kembali_date');
            $table->integer('status')->default('1');
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
        // untuk menghapus tabel jika ternyata ada tabel yang sama
        Schema::dropIfExists('peminjamanbuku');
    }
};
