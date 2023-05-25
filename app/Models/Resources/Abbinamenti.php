<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Abbinamenti extends Model {

    protected $table = 'Abbinamenti';
    protected $primaryKey = 'idOfferta'; //Come si fa la chiave composta??
    public $timestamps = false;
}

