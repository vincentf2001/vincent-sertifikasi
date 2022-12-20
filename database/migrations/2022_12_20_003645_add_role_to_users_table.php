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
        // untuk menambahkan field pada tabel users
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role')->default('0');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
