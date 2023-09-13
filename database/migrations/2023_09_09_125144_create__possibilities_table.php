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
        Schema::create('possibilities', function (Blueprint $table) {
            $table->id();
   
            $table->json('brands');
            $table->json('os');
            $table->json('storage');
            $table->json('RAM');
            $table->json('CPUs');
            $table->json('GPUs');        
           $table->json('screen size');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('possibilities');
    }
};


// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// class CreateProductTables extends Migration
// {
//     public function up()
//     {
//         Schema::create('categories', function (Blueprint $table) {
//             $table->id();
//             $table->json('data');
//             $table->timestamps();
//         });

//         Schema::create('features', function (Blueprint $table) {
//             $table->id();
//             $table->json('data');
//             $table->timestamps();
//         });

//         Schema::create('brands', function (Blueprint $table) {
//             $table->id();
//             $table->json('data');
//             $table->timestamps();
//         });

//         Schema::create('os', function (Blueprint $table) {
//             $table->id();
//             $table->json('data');
//             $table->timestamps();
//         });

//         Schema::create('storage', function (Blueprint $table) {
//             $table->id();
//             $table->json('data');
//             $table->timestamps();
//         });

//         Schema::create('ram', function (Blueprint $table) {
//             $table->id();
//             $table->json('data');
//             $table->timestamps();
//         });

//         Schema::create('cpus', function (Blueprint $table) {
//             $table->id();
//             $table->json('data');
//             $table->timestamps();
//         });

//         Schema::create('gpus', function (Blueprint $table) {
//             $table->id();
//             $table->json('data');
//             $table->timestamps();
//         });

//         Schema::create('screen_sizes', function (Blueprint $table) {
//             $table->id();
//             $table->json('data');
//             $table->timestamps();
//         });
//     }

//     public function down()
//     {
//         Schema::dropIfExists('categories');
//         Schema::dropIfExists('features');
//         Schema::dropIfExists('brands');
//         Schema::dropIfExists('os');
//         Schema::dropIfExists('storage');
//         Schema::dropIfExists('ram');
//         Schema::dropIfExists('cpus');
//         Schema::dropIfExists('gpus');
//         Schema::dropIfExists('screen_sizes');
//     }
// }
