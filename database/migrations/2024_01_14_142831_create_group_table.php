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
        Schema::create('group', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('karyawan_id');
			$table->foreign('karyawan_id')->references('id')->on('karyawan')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('wilayah_id');
			$table->foreign('wilayah_id')->references('id')->on('wilayah')->onDelete('cascade')->onUpdate('cascade');
            $table->text('job');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group');
    }
};
