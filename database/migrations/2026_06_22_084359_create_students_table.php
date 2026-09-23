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
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->unsignedTinyInteger('profile_step')
                ->default(1);

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();        

            // Student Information
            $table->string('student_number')->unique();
            $table->string('first_name');
            $table->string('last_name');

            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('destination')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('whatsapp', 50)->nullable();
            $table->string('alt_email')->nullable();
            $table->string('alt_phone')->nullable();

            // Passport Information
            $table->string('passport_number')->nullable()->unique();
            $table->date('passport_issue_date')->nullable();
            $table->date('passport_expiry_date')->nullable();

            // service type
            $table->string('service_type')->nullable(); // HBD Service (hbd),Language Academic(la)

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};