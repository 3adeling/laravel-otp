<?php

/*
 * @copyright 2018 Hilmi Erdem KEREN
 * @license MIT
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

final class AlterOtpTokensTableAddTypeColumn extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('otp_tokens', function (Blueprint $table): void {
            $table->string('scope', 64)->nullable()->after('cipher_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('otp_tokens', function (Blueprint $table): void {
            $table->dropColumn('scope');
        });
    }
}