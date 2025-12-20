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
        Schema::create('hearings', function (Blueprint $table) {
            $table->id();
            $table->foreignId("case_id")->nullable()->constrained('cases')->onDelete('cascade');
            $table->foreignId('firm_id')->nullable()->constrained('firms')->onDelete('cascade');
            $table->dateTime('hearing_date');
            $table->string('judge_name')->nullable();
            $table->string('room_number')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hearings');
    }
};
