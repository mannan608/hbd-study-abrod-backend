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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // University
            $table->foreignId('university_id')
                ->constrained('universities')
                ->cascadeOnDelete();

            // Optional course-specific scholarship
            // NULL = university-wide scholarship
            $table->foreignUuid('course_id')
                ->nullable()
                ->constrained('courses')
                ->nullOnDelete();

            // Scholarship information
            $table->string('title');

            $table->string('amount_description')
                ->nullable();

            // Partial, Full, One-time
            $table->string('coverage_type', 50)
                ->nullable();

            $table->text('eligibility_criteria')
                ->nullable();

            $table->date('deadline')
                ->nullable();

            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();

            $table->index([
                'university_id',
                'is_active',
            ]);

            $table->index([
                'course_id',
                'is_active',
            ]);

            $table->index('deadline');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
