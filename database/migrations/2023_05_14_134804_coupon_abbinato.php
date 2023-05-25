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
        Schema::create('CouponAbbinato', function (Blueprint $table) {
            $table->bigIncrements('codiceCoupon')->unsigned()->index();
            $table->dateTime('dataCreazione');
            $table->bigInteger('idUtente')->unsigned();
            $table->bigInteger('idOffertaAbbinata')->unsigned()->index();
            $table->foreign('idUtente')->references('idUtente')->on('Utente');
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
        Schema::dropIfExists('CouponAbbinato');
    }
};
