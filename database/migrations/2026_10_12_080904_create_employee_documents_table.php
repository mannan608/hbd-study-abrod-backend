
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employee_documents', function (Blueprint $table) {
            $table->id();

            // Employee relationship
            $table->foreignId('employee_id')
                ->constrained('employees')
                ->restrictOnDelete();

            // Document information
            $table->string('document_key', 100);
            $table->string('document_name', 200);

            // Store files in private storage
            $table->string('file_path')->nullable();
            $table->string('original_name')->nullable();
            $table->string('mime_type', 150)->nullable();
            $table->unsignedBigInteger('file_size')->nullable();

            // pending, uploaded, in_review, approved, rejected, expired
            $table->string('status', 20)->default('pending');

            // Upload audit
            $table->foreignId('uploaded_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // Review audit
            $table->foreignId('reviewed_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->timestamp('reviewed_at')->nullable();
            $table->text('review_remarks')->nullable();

            // Optional document validity
            $table->date('issued_at')->nullable();
            $table->date('expires_at')->nullable();

            $table->timestamps();

            // Employee document listing and filtering
            $table->index(
                ['employee_id', 'document_key'],
                'employee_documents_employee_key_idx'
            );

            $table->index(
                ['employee_id', 'status'],
                'employee_documents_employee_status_idx'
            );

            // Find documents requiring review
            $table->index(
                ['status', 'created_at'],
                'employee_documents_status_created_idx'
            );

            // Find documents expiring soon
            $table->index('expires_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employee_documents');
    }
};
