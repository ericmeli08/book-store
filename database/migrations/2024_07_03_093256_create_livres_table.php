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
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string("REF",100)->unique()->nullable(false);
            $table->string("ISBN",191)->unique();
            $table->string("titre",100);
            $table->string("auteur",100);
            $table->integer("stock");
            $table->decimal("pu",8,2,true);
            $table->longText("resumer");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livres');
    }
};
