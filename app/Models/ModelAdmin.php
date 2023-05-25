<?php

namespace App\Models;

use App\Models\Resources\Azienda;


class ModelAdmin{
    
    public function getAziende(){
        return Azienda::all();
    }
}
