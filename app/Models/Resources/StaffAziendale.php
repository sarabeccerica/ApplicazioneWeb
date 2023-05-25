<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class StaffAziendale extends Model {

    protected $table = 'StaffAziendale';
    protected $primaryKey = 'idUtente'; //Chiave composta
    public $timestamps = false;
}


