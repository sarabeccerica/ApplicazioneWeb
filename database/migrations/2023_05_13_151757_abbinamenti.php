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
        Schema::create('Abbinamenti', function (Blueprint $table) {
            $table->bigInteger('idOfferta')->unsigned()->index();
            $table->bigInteger('idOffertaAbbinata')->unsigned()->index();
            $table->foreign('idOfferta')->references('idOfferta')->on('Offerta');
            $table->foreign('idOffertaAbbinata')->references('idOffertaAbbinata')->on('OffertaAbbinata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Abbinamenti');
    }
};
