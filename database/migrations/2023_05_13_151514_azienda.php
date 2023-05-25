<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Azienda', function (Blueprint $table) {
            $table->bigIncrements('idAzienda')->unsigned()->index();
            $table->string('ragioneSociale',45);
            $table->string('tipologia',45);
            $table->string('descrizione',45);
            $table->string('via',45);
            $table->string('numeroCivico',45);
            $table->string('citta',45);
            $table->string('CAP',5);
            $table->text('logo');
            $table->string('mail',45);
            $table->string('telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Azienda');
    }
};
