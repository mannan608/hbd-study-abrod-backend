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
        Schema::create('scholarship_eligibility', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('scholarship_id');
            $table->unsignedBigInteger('criteria_id');

            $table->string('value', 255);

            $table->timestamp('created_at')->nullable()->useCurrent();

            $table->timestamp('updated_at')->nullable()->useCurrent()->useCurrentOnUpdate();

            // Foreign keys
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->cascadeOnDelete();

            $table->foreign('criteria_id')->references('id')->on('eligibility_criteria')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_eligibility');
    }
};
