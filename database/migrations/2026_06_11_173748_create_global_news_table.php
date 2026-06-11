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
        Schema::create('global_news', function (Blueprint $table) {
             $table->id();
        $table->string('title');
        $table->string('image_path');
        $table->string('author');
        $table->date('published_date');
        $table->text('content');
        $table->string('url');
        $table->string('filters')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('global_news');
    }
};
