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
        Schema::table('peminjamanbuku', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('spesifikasiBuku_id')->index()->after('id');
            $table->foreign('spesifikasiBuku_id')->references('id')->on('spesifikasiBuku')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjamanbuku', function (Blueprint $table) {
            //
            $table->dropColumn('spesifikasiBuku_id');
        });
    }
};
