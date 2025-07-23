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
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->mediumText("image")->nullable();
            $table->string('statut');
            $table->integer('etage');
            $table->string('douche');
            $table->string('netoyer');
            $table->string('toilette');
            $table->integer("capacite");
            $table->integer("numero");
            $table->integer("tarif");
            $table->string("bain");
            $table->string("clim");
            $table->string("tele");
            $table->string("message");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambres');
    }
};
