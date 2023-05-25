<?php

namespace App\Models;

use App\Models\Resources\Faq;


class ModelFaq {
    
    public function getFAQ(){
        return Faq::all();
    }
}
