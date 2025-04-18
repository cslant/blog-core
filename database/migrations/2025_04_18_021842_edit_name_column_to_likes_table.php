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
        Schema::table('likes', function (Blueprint $table) {
            $table->renameColumn('likeable_id', 'model_id');
            $table->renameColumn('likeable_type', 'model_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('likes', function (Blueprint $table) {
            $table->renameColumn('model_id', 'likeable_id');
            $table->renameColumn('model_type', 'likeable_type');
        });
    }
};
