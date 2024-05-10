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
        Schema::create('detail_slider_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_services');
            $table->string('slider_1');
            $table->string('slider_2');
            $table->string('slider_3');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->foreign('id_services')->references('id')->on('service')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_slider_services');
    }
};
