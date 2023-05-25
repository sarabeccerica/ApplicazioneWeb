<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Offerta extends Model {

    protected $table = 'Offerta';
    protected $primaryKey = 'idOfferta';
    public $timestamps = false;
    
    protected $fillable = ['oggetto', 'modalita', 'dataInizio', 'dataFine', 'luogoFruizione','percentualeSconto','idAzienda','img'];
    public function getAziendaOfferta() {
        return $this->hasOne(Azienda::class, 'idAzienda', 'idAzienda');
    }
    
}


