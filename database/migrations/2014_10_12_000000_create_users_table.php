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
        // $userImage =;

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->default("nour");
            $table->string('lastName');
            $table->string('father');
            $table->string('mother');
            $table->integer('age');

            $table->string('phone');
            $table->string('address');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('gender', ['ذكر', 'انثى']);
            $table->string('image')->nullable()->default(asset('images/user.png'));

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
