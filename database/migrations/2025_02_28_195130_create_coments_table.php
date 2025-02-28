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
        Schema::create('coments', function (Blueprint $table) {
            $table->id();
            $table->text('comentarios');


            $table->unsignedBigInteger('jersey_id');
            $table->foreign('jersey_id')->references('id')->on('jerseys')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coments');
    }
};
