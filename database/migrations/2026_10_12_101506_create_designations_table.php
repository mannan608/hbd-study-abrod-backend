
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('designations', function (Blueprint $table) {
            $table->id();

            // Designation information
            $table->string('name', 150);
            $table->string('code', 50)->unique();
            $table->text('description')->nullable();

            // Optional hierarchy level
            $table->unsignedSmallInteger('level')->nullable();

            // Display ordering
            $table->unsignedSmallInteger('sort_order')->default(0);

            // Active/inactive designation
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            // Useful for designation dropdowns and filtering
            $table->index(
                ['is_active', 'sort_order'],
                'designations_active_sort_idx'
            );

            $table->index('name');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('designations');
    }
};
