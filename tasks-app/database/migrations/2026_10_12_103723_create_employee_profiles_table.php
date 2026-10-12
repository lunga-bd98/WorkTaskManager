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
        Schema::create('employee_profiles', function (Blueprint $table) {
            $table->id();
            // Login/account
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            // Staff information
            $table->string('employee_number')->unique();
            $table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('surname');
            $table->string('id_number', 20)->unique();
            $table->date('date_of_birth')->nullable();
            // Profile picture
            $table->string('profile_picture')->nullable();
            // Contact information
            $table->string('phone', 30)->nullable();
            $table->string('alternative_phone', 30)->nullable();
            // Address
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_profiles');
    }
};
