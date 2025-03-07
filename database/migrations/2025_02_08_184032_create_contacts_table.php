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
        Schema::create('contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id1');
            $table->foreign('user_id1')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('user_id2');
            $table->foreign('user_id2')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['user_id1','user_id2']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }

};
