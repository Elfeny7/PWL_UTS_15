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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->string('kode_buku', 10)->primary();
            $table->string('judul', 100)->nullable();
            $table->string('pengarang', 100)->nullable();
            $table->string('jenis_buku', 100)->nullable();
            $table->integer('harga')->nullable();
            $table->integer('qty')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashboards');
    }
};
