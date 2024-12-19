<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pinjam', function (Blueprint $table) {
            // Menambahkan foreign key
            $table->foreign('no_anggota')->references('id')->on('anggotas')->onDelete('cascade');
            $table->foreign('id_buku')->references('id')->on('buku')->onDelete('cascade');
            
            $table->id('nopinjam');
            $table->unsignedBigInteger('no_anggota'); 
            $table->unsignedBigInteger('id_buku'); 
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->decimal('denda', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam');
    }
};
