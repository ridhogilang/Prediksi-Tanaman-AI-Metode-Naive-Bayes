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
        Schema::create('data_testing', function (Blueprint $table) {
            $table->id();
            $table->string('oksigen');
            $table->string('tekstur');
            $table->string('kelembapan');
            $table->string('suhu');
            $table->string('keasaman');
            $table->string('tanaman');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_testing');
    }
};
