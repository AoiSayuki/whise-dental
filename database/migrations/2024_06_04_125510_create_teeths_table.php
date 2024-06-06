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
            $table->string('tooth_1');
            $table->string('tooth_2');
            $table->string('tooth_3');
            $table->string('tooth_4');
            $table->string('tooth_5');
            $table->string('tooth_6');
            $table->string('tooth_7');
            $table->string('tooth_8');
            $table->string('tooth_9');
            $table->string('tooth_10');
            $table->string('tooth_11');
            $table->string('tooth_12');
            $table->string('tooth_13');
            $table->string('tooth_14');
            $table->string('tooth_15');
            $table->string('tooth_16');
            $table->string('tooth_17');
            $table->string('tooth_18');
            $table->string('tooth_19');
            $table->string('tooth_20');
            $table->string('tooth_21');
            $table->string('tooth_22');
            $table->string('tooth_23');
            $table->string('tooth_24');
            $table->string('tooth_25');
            $table->string('tooth_26');
            $table->string('tooth_27');
            $table->string('tooth_28');
            $table->string('tooth_29');
            $table->string('tooth_30');
            $table->string('tooth_31');
            $table->string('tooth_32');
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
