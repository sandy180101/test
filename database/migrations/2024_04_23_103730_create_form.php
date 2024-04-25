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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('personal_email');
            $table->string('name');
            $table->string('company_name');
            $table->string('official_email');
            $table->string('linkedin_profile');
            $table->string('city');
            $table->string('association_preference');
            $table->enum('iamai_member', ['yes', 'no']);
            $table->json('sectors')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
