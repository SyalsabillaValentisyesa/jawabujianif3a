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
        Schema::create('anggotas', function(Blueprint $table){
        $table->id();
        $table->char('no_anggota',8);
        $table->string('nama');
        $table->string('alamat');
        $table->string('jurusan',);
        $table->date('tgl_masuk');
        $table->string('notelp');
        $table->timestamps();
    });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};