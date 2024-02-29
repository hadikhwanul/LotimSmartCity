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
        Schema::create('governances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('portal');
            $table->string('slug')->unique();
            $table->string('alamat')->nullable();
            $table->text('deskripsi');
            $table->text('link')->nullable();
            $table->string('status');
            $table->string('logo_sg')->nullable();
            $table->timestamp('published_it')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('governances');
    }
};
