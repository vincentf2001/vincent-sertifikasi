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
        // untuk menambahkan field pada tabel peminjamanbuku
        Schema::table('peminjamanbuku', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->index()->after('id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // untuk menghapus field jika ternyata ada field yang sama
        Schema::table('peminjamanbuku', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
