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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('position');
            $table->string('office');
            $table->string('country');
            $table->string('city')->nullable();
            $table->enum('gender',['male', 'female']);
            $table->date('birthDay')->nullable();
            $table->decimal('salary' ,8,2);
            $table->timestamps();


        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};