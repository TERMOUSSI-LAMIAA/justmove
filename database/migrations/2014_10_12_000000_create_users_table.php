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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('type_user', ['admin', 'user', 'member', 'visitor']);
            $table->enum('categorie', ['Male', 'Female'])->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('sport_id')->nullable()->constrained('sport');
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
