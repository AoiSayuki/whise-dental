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
        Schema::create('teeths', function (Blueprint $table) {
            $table->id();
            $table->string('tooth_1')->default('clean');
            $table->string('tooth_2')->default('clean');
            $table->string('tooth_3')->default('clean');
            $table->string('tooth_4')->default('clean');
            $table->string('tooth_5')->default('clean');
            $table->string('tooth_6')->default('clean');
            $table->string('tooth_7')->default('clean');
            $table->string('tooth_8')->default('clean');
            $table->string('tooth_9')->default('clean');
            $table->string('tooth_10')->default('clean');
            $table->string('tooth_11')->default('clean');
            $table->string('tooth_12')->default('clean');
            $table->string('tooth_13')->default('clean');
            $table->string('tooth_14')->default('clean');
            $table->string('tooth_15')->default('clean');
            $table->string('tooth_16')->default('clean');
            $table->string('tooth_17')->default('clean');
            $table->string('tooth_18')->default('clean');
            $table->string('tooth_19')->default('clean');
            $table->string('tooth_20')->default('clean');
            $table->string('tooth_21')->default('clean');
            $table->string('tooth_22')->default('clean');
            $table->string('tooth_23')->default('clean');
            $table->string('tooth_24')->default('clean');
            $table->string('tooth_25')->default('clean');
            $table->string('tooth_26')->default('clean');
            $table->string('tooth_27')->default('clean');
            $table->string('tooth_28')->default('clean');
            $table->string('tooth_29')->default('clean');
            $table->string('tooth_30')->default('clean');
            $table->string('tooth_31')->default('clean');
            $table->string('tooth_32')->default('clean');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teeths');
    }
};
