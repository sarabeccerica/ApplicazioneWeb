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
        Schema::create('OffertaAbbinata', function (Blueprint $table) {
            $table->bigIncrements('idOffertaAbbinata')->unsigned()->index();
            $table->string('descrizione',45);
            $table->dateTime('dataInizio');
            $table->dateTime('dataFine');
            $table->integer('percentualeScontoAggiuntivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('OffertaAbbinata');
    }
};
