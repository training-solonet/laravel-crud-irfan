<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
        Schema::create('pelanggan', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pelanggan');
        $table->string('alamat_pelanggan');
        $table->string('no_telp_pelanggan')->unique();
        $table->timestamps();
    });
    
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop(table: 'pelanggan');
    }
};
