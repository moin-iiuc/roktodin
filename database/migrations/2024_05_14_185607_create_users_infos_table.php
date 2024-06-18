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
        Schema::create('users_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('nid');
            $table->string('bg');
            $table->string('phone')->unique();
            $table->string('city');
            $table->string('thana');
            $table->string('pass');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_infos');
    }
};
