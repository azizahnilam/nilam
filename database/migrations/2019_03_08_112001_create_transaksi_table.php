<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->integer('id_film');
            $table->string('nama', 50);
            $table->string('no_ktp', 25);
            $table->string('tgl_pinjam', 50);
            $table->string('tgl_kembali', 50);
            $table->double('harga_sewa');
            $table->string('status', 25);
            $table->string('tgl_input', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
