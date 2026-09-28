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
        Schema::create('providers_university', function (Blueprint $table) {
             $table->id();

            $table->unsignedBigInteger('agent_id');
            $table->unsignedBigInteger('university_id');

            $table->timestamp('created_at')->nullable()->useCurrent();

            // Prevent duplicate agent-university assignments
            $table->unique(['agent_id', 'university_id'], 'unique_agent_university');

            // Foreign keys
            $table->foreign('agent_id')->references('id')->on('agents')->cascadeOnDelete();

            $table->foreign('university_id')->references('id')->on('universities')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers_university');
    }
};
