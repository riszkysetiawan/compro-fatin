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
        Schema::create('detail_service', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_services');
            $table->string('judul');
            $table->string('keterangan');
            $table->string('caption');
            $table->string('caption_slider1');
            $table->string('caption_slider2');
            $table->string('caption_slider3');
            $table->timestamps();
            $table->foreign('id_services')->references('id')->on('service')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_service');
    }
};
