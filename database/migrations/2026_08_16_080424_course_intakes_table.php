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
        Schema::create('course_intakes', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Course
            $table->foreignUuid('course_id')
                ->constrained('courses')
                ->cascadeOnDelete();

            // Intake
            $table->string('intake_month', 20);
            $table->unsignedSmallInteger('intake_year');

            // Dates
            $table->date('application_deadline');
            $table->date('start_date')->nullable();

            // Status
            $table->enum('status', [
                'open',
                'closed',
                'upcoming',
            ])->default('open');

            $table->timestamps();

            // Prevent duplicate intake for same course
            $table->unique([
                'course_id',
                'intake_month',
                'intake_year',
            ]);

            $table->index([
                'course_id',
                'status',
            ]);

            $table->index('application_deadline');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_intakes');
    }
};