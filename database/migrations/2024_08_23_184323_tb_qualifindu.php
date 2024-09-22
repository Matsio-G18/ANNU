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
        Schema::create('tb_qualifindu', function (Blueprint $table) {
            $table->id();
            $table->string('col_nbr_sal');
            $table->foreign('ce_id_ind_qualif_sal')->refernces('idInd')->on('tb_qualifindu')->onDelete('cascade');
            $table->timestamps();
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
