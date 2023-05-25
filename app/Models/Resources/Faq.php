<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model {

    protected $table = 'faq';
    protected $primaryKey = 'codiceFAQ';
    public $timestamps = false;
    
    protected $fillable = ['domanda', 'risposta'];
}


