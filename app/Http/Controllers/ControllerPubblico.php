<?php
namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Support\Facades\Log;


class ControllerPubblico extends Controller
{

    protected $_modelCatalogo;

    public function __construct() {
        $this->_modelCatalogo = new Catalogo;
    }

    public function showAziende() {
        $aziende = $this->_modelCatalogo->getAziende();
        return view('aziende')
                        ->with('aziende', $aziende);
    }
    
    public function showOfferte() {
        $offerte = $this->_modelCatalogo->getOfferte();
        return view('offerte')
                        ->with('offerte', $offerte);
        
    }
    
    public function showDettaglioOfferta($idOfferta) {
        $dettaglioOfferta = $this->_modelCatalogo->getDettaglioOfferta($idOfferta);
        return view('offerte')
                        ->with('dettaglioOfferta', $dettaglioOfferta);
    }
    
    public function showDettaglioAzienda($idAzienda) {
        $azienda = $this->_modelCatalogo->getAzienda($idAzienda);
        $offerteAzienda = $this->_modelCatalogo->getOfferteByAzienda($idAzienda);
        return view('aziende')
                        ->with('azienda', $azienda)
                        ->with('offerteAzienda', $offerteAzienda);
    }
    
    public function showOfferteAbbinate() {
        $offerteAbbinate = $this->_modelCatalogo->getOfferteAbbinate();
        
        return view('catalogo')
                        ->with('OfferteAbbinate', $offerteAbbinate);
    }
}


