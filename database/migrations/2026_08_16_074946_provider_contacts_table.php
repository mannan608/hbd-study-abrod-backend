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
        Schema::create('provider_contacts', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // University
           $table->foreignId('university_id')
    ->constrained('universities')
    ->cascadeOnDelete();

            // Campus
            // NULL = contact is for the entire university
            $table->foreignUuid('campus_id')
                ->nullable()
                ->constrained('university_campuses')
                ->cascadeOnDelete();

            // Personal information
            $table->string('first_name', 100);
            $table->string('last_name', 100);

            $table->string('designation', 150)->nullable();

            $table->string('email', 191);
            $table->string('phone', 50)->nullable();
            $table->string('whatsapp_number', 50)->nullable();

            // Contact responsibility
            $table->enum('contact_type', [
                'admissions',
                'offer_issuance',
                'cas_visa',
                'finance_commission',
                'general',
            ])->default('general');

            // Countries/regions handled by this contact
            // Example: ["BD", "IN", "NP"]
            $table->json('assigned_regions')->nullable();

            // Main contact for university/campus
            $table->boolean('is_primary')
                ->default(false);

            $table->boolean('is_active')
                ->default(true);

            $table->timestamps();

            // Useful indexes
            $table->index(['university_id', 'is_active']);
            $table->index(['campus_id', 'is_active']);
            $table->index(['contact_type', 'is_active']);
            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provider_contacts');
    }
};