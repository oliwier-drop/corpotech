<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $firstTwoUserIds = DB::table('users')
            ->orderBy('id')
            ->limit(2)
            ->pluck('id');

        if ($firstTwoUserIds->isEmpty()) {
            return;
        }

        DB::table('users')
            ->whereIn('id', $firstTwoUserIds)
            ->whereNull('email_verified_at')
            ->update([
                'email_verified_at' => Carbon::now(),
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $firstTwoUserIds = DB::table('users')
            ->orderBy('id')
            ->limit(2)
            ->pluck('id');

        if ($firstTwoUserIds->isEmpty()) {
            return;
        }

        DB::table('users')
            ->whereIn('id', $firstTwoUserIds)
            ->update([
                'email_verified_at' => null,
            ]);
    }
};

