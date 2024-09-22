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
        Schema::create('prodindu', function(blueprint $table){
            $table->id();
            $table->foreign('idInd')->references('idInd')->on('industrie')->onDelete('cascade');
            $table->foreign('idProd')->references('idProd')->on('produit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
