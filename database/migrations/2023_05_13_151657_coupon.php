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
        Schema::create('Coupon', function (Blueprint $table) {
            $table->bigIncrements('codiceCoupon')->unsigned()->index();
            $table->dateTime('dataCreazione');
            $table->bigInteger('idUtente')->unsigned();
            $table->bigInteger('idOfferta')->unsigned();
            $table->foreign('idUtente')->references('idUtente')->on('Utente');
            $table->foreign('idOfferta')->references('idOfferta')->on('Offerta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Coupon');
    }
};
