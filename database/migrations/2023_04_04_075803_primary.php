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
        Schema::table('books', function(Blueprint $table){
            $table->integer('kode_buku', 10)->primary();
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
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('kode_buku', 10);
            $table->dropColumn('judul', 100);
            $table->dropColumn('pengarang', 100);
            $table->dropColumn('jenis_buku', 100);
            $table->dropColumn('harga');
            $table->dropColumn('qty');
        });
    }
};
