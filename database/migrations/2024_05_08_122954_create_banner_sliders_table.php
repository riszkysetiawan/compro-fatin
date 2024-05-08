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
        Schema::create('Banner_Slider', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('sub_judul');
            $table->string('caption');
            $table->string('button');
            $table->string('bg_foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Banner_Slider');
    }
};
