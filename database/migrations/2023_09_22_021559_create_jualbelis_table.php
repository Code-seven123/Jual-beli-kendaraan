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
        Schema::create('jualbelis', function (Blueprint $table) {
            $table->id('kdMotor');
            $table->string('merkMotor', 100);
            $table->string('namaMotor', 100);
            $table->string('warna', 15);
            $table->integer('harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jualbelis');
    }
};
