<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id();

            $table->string('name', 191);

            $table->enum('scope_type', ['university', 'course', 'intake']);

            // Base level - always required
            $table->foreignId('university_id')->constrained('universities')->cascadeOnDelete();

            // Required when scope_type = course or intake
            $table->foreignId('course_id')->nullable()->constrained('courses')->nullOnDelete();

            // Required when scope_type = intake
            $table->foreignId('intake_id')->nullable()->constrained('intakes')->nullOnDelete();

            $table->enum('discount_type', ['percentage', 'fixed']);

            // 25.00 = 25% OR 2000.00 = $2000
            $table->decimal('discount_value', 10, 2);

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->enum('status', ['active', 'inactive'])->default('active');

            $table->timestamps();
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