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
        //
        Schema::create('blog', function (Blueprint $table) {
            $table->id('blog_id');
            $table->string('blog_title');
            $table->string('blog_thumbnail');
            $table->string('blog_category');
            $table->string('blog_views');
            $table->string('blog_description');
            $table->string('blog_author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('blog');
    }
};
