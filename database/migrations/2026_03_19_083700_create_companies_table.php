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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('company_name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('employer_location')->nullable();
            $table->string('industry')->nullable();
            $table->string('company_size')->nullable();
            $table->string('company_logo')->nullable();
            $table->enum('is_approved', ['approved', 'in_review', 'rejected']);
            $table->enum('is_banned', ['banned', 'unbanned'])->default('unbanned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
