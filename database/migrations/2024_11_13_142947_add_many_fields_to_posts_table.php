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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('summary', 50)->nullable()->after('body');
            $table->string('slug')->unique()->after('title');
            $table->string('status')->default('draft')->after('published_at');
            $table->integer('reading_time')->default(1)->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('summary');
            $table->dropColumn('slug');
            $table->dropColumn('status');
            $table->dropColumn('reading_time');
        });
    }
};
