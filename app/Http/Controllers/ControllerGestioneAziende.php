<?php

namespace App\Http\Controllers;

use App\Models\ModelAdmin;

class ControllerGestioneAziende extends Controller {

    protected $_modelAdmin;
    
    
    public function __construct() {
        $this->_modelAdmin = new ModelAdmin;
    }

    public function restituisciAziende() {
        $aziende = $this->_modelAdmin->getAziende();
        return view('gestioneAziende')
        ->with('aziende', $aziende);
    }
}

