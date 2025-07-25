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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->string('prenom');
            $table->string('nom');
            $table->string("civil");
            $table->mediumText("photo")->nullable();
            $table->string("adress");
            $table->integer("phone");
            $table->string("ville");
            $table->string("pays");
            $table->string("email")->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
