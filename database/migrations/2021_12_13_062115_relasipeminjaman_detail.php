<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasipeminjamanDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pinjaman_details', function (Blueprint $table) {
            $table->unsignedInteger('pinjaman_id');
            $table->unsignedInteger('buku_id');
            $table->foreign('pinjaman_id')->references('id')->on('pinjamen')->onDelete('cascade');
            $table->foreign('buku_id')->references('id')->on('bukus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pinjaman_details', function (Blueprint $table) {
            //
        });
    }
}
