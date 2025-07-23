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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable()->constrained('categories')->OnDelete('cascade');
            $table->unsignedBigInteger('line_id')->nullable()->constrained('lines')->OnDelete('cascade');
            $table->string('url_image')->nullable();
            $table->string('url_name_image')->nullable();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('url_technical_sheet')->nullable(); // ficha técnica
            $table->string('url_safety_data_sheet')->nullable(); // file de hoja de seguridad
            $table->string('url_case_studies')->nullable(); // casos de exito
            $table->string('tag')->nullable(); // etiqueta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
