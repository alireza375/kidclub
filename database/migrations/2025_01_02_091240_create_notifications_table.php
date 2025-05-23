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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->foreignId('user_id')->constrained();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->string('title');
            $table->boolean('read')->default(0);
            $table->timestamp('read_at')->nullable();
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
