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
            $table->string('name');
            $table->string('address');
            $table->unsignedBigInteger('departement_id');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('phone');
            $table->string('email')->unique();
            $table->boolean('is_active')->default(true); // Default value
            $table->timestamps();

            $table->foreign('departement_id')->references('id')->on('departement'); // Correct table name
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
