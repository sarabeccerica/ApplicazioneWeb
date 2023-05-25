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
        Schema::create('Utente', function (Blueprint $table) {
            $table->bigIncrements('idUtente')->unsigned()->index();
            $table->string('nome',45);
            $table->string('cognome',45);
            $table->string('genere',45);
            $table->integer('eta');
            $table->integer('livello');
            $table->string('email',45);
            $table->string('telefono');
            $table->string('username',45);
            $table->string('password',45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Utente');
    }
};
