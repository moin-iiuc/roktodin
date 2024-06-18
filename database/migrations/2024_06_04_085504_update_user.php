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
        //
        Schema::table('users',function (Blueprint $table) {
            $table->unsignedBigInteger('nid');
            $table->string('bg');
            $table->string('phone')->unique();
            $table->string('city');
            $table->string('thana');
            $table->date('blood_last_given')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropColumn('nid');
        Schema::dropColumn('bg');
        Schema::dropColumn('city');
        Schema::dropColumn('phone');
        Schema::dropColumn('thana');
        Schema::dropColumn('blood_last_given');

    }
};
