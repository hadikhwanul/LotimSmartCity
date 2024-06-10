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
        Schema::create('saluran_bantuans', function (Blueprint $table) {
            $table->id();
            $table->string('portal');
            $table->string('slug')->unique();
            $table->string('alamat');
            $table->text('deskripsi');
            $table->text('link');
            $table->string('status');
            $table->string('logo_bd')->nullable();
            $table->timestamp('published_it')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saluran_bantuans');
    }
};
