<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model {

    protected $table = 'Utente';
    protected $primaryKey = 'idUtente';
    public $timestamps = false;
    
    protected $fillable = ['nome', 'cognome', 'eta','genere', 'email', 'telefono'];
}



