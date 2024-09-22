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
        Schema::create('tb_industrie', function (Blueprint $table) {
            $table->id();
            $table->foreign('ce_id_Dep_ind')->refernces('idDep');
            $table->foreign('ce_id_etab_ind')->references('idEtab');
            $table->foreign('ce_id_pro_ind')->references('idPro');
            $table->foreign('ce_id_dir_ind')->refernces('idDir');
            $table->string('col_nom_ind');
            $table->date('col_date_ind');
            $table->string('col_nom_dir_ind');
            $table->int('col_nbr_sal_ind');
            $table->string('col_nom_etab_ind');
            $table->int('col_mntcaht_ind');
            $table->sting('col_num_auto_ind');
            $table->string('col_siteweb_ind');
            $table->email('col_email_ind');
            $table->string('col_localisation_ind');
            $table->int('col_cap_prod_ind');
            $table->string('col_nom_pro_ind');
            $table->bit('col_logo_ind');
            $table->int('col_latitude_ind');
            $table->int('col_longitude_ind');
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
