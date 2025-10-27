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
        Schema::create('work_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bussine_id')->constrained('bussines')->onDelete('cascade');
            $table->string('name');
            $table->string('position')->nullable();
            $table->text('function')->nullable();
            $table->text('review')->nullable();
            $table->text('projects')->nullable();
            $table->string('url_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_teams');
    }
};
