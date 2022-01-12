<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('kode',30)->nullable();
            $table->string('judul',100)->nullable();
            $table->string('deskripsi',255)->nullable();
            $table->enum('penerbit',['ganesha','Tiga serangkai'])->nullable();
            $table->year('tahun_terbit')->nullable();
            $table->string('pengarang',100,)->nullable();
            $table->integer('jumlah_halaman',autoIncrement:false, unsigned:false)->nullable();
            $table->enum('kondisi',['baik','sedang','rusak'])->nullable();
            $table->enum('Status',['bebas','terpinjam'])->nullable();
            $table->string('Foto_sampul')->nullable();
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
        Schema::dropIfExists('bukus');
    }
}
