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
        Schema::table('job_seeker_profiles', function (Blueprint $table): void {
            $table->timestamp('onboarding_first_login_seen_at')->nullable()->after('seeker_location');
            $table->timestamp('onboarding_experience_completed_at')->nullable()->after('onboarding_first_login_seen_at');
            $table->timestamp('onboarding_education_completed_at')->nullable()->after('onboarding_experience_completed_at');
            $table->timestamp('onboarding_completed_at')->nullable()->after('onboarding_education_completed_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_seeker_profiles', function (Blueprint $table): void {
            $table->dropColumn([
                'onboarding_first_login_seen_at',
                'onboarding_experience_completed_at',
                'onboarding_education_completed_at',
                'onboarding_completed_at',
            ]);
        });
    }
};
