<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('duration');
            $table->decimal('fee', 10, 2);
            $table->enum('difficulty', ['Easy', 'Medium', 'Hard']);
            $table->boolean('is_active')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn([
                'name',
                'description',
                'duration',
                'fee',
                'difficulty',
                'is_active',
            ]);
        });
    }
};
