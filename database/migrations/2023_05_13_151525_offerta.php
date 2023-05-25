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
        Schema::create('Offerta', function (Blueprint $table) {
            $table->bigIncrements('idOfferta')->unsigned()->index();
            $table->string('oggetto',45);
            $table->string('descrizione',45);
            $table->string('modalita',45);
            $table->string('luogoFruizione',45);
            $table->dateTime('dataInizio');
            $table->dateTime('dataFine');
            $table->integer('percentualeSconto');
            $table->bigInteger('idAzienda')->unsigned();
            $table->foreign('idAzienda')->references('idAzienda')->on('Azienda');
            $table->text('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Offerta');
    }
};
