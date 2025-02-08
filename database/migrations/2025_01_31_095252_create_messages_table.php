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
        Schema::create('chanels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->unsignedBigInteger('manager');
            $table->foreign('manager')->references('id')->on('users')->onDelete('cascade');
            $table->string('image')->unique();
            $table->longText('about');
            $table->boolean('Is_private')->default(0);
            $table->timestamps();
        });

        Schema::create('chanel_user', function (Blueprint $table) {
            $table->unsignedBigInteger('chanel_id');
            $table->foreign('chanel_id')->references('id')->on('chanels')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['chanel_id','user_id']);
        });

        Schema::create('groups', function (Blueprint $table){
            $table->id();
            $table->string('name')->unique();
            $table->text('about')->unique();
            $table->string('image')->unique();
            $table->boolean('Is_private')->default(0);
            $table->timestamps();
        });

        Schema::create('group_user', function (Blueprint $table) {
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['group_id','user_id']);
        });
        Schema::create('conversations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user1_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('user2_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation_id')->constrained()->onDelete('cascade');
            $table->foreignId('sender_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade')->nullable();
            $table->foreignId('group_id')->constrained('groups')->onDelete('cascade')->nullable();
            $table->foreignId('chanel_id')->constrained('chanels')->onDelete('cascade')->nullable();
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
