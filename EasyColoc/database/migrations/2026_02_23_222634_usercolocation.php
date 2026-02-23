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
         Schema::create('user_colocation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');
            $table->foreignId('colocation_id')
                  ->constrained('colocations')
                  ->onDelete('cascade');
            $table->enum('role', ['owner', 'member'])->default('member');
            $table->enum('status', ['active', 'left'])->default('active');
            $table->timestamps();

            $table->unique(['user_id', 'colocation_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('user_colocation');
    }
};
