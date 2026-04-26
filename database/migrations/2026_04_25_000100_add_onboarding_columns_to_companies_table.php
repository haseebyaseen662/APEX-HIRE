<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('companies', function (Blueprint $table): void {
            $table->timestamp('onboarding_first_login_seen_at')->nullable()->after('company_logo');
            $table->timestamp('onboarding_completed_at')->nullable()->after('onboarding_first_login_seen_at');
        });
    }

    public function down(): void
    {
        Schema::table('companies', function (Blueprint $table): void {
            $table->dropColumn([
                'onboarding_first_login_seen_at',
                'onboarding_completed_at',
            ]);
        });
    }
};

