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
        Schema::create('StaffAziendale', function (Blueprint $table) {
            $table->bigInteger('idUtente')->unsigned()->index();
            $table->bigInteger('idAzienda')->unsigned()->index();
            $table->foreign('idUtente')->references('idUtente')->on('Utente');
            $table->foreign('idAzienda')->references('idAzienda')->on('Azienda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('StaffAziendale');
    }
};
