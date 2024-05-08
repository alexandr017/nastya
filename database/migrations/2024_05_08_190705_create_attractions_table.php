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
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->unsigned();
            $table->string('title', 255);
            $table->string('h1', 255);
            $table->string('meta_description', 500);
            $table->string('breadcrumb', 255);
            $table->string('preview', 255);
            $table->text('content');
            $table->float('distance_from_center')->unsigned();
            $table->boolean('is_free_entry');
            $table->boolean('is_availability_of_excursions');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attractions');
    }
};
