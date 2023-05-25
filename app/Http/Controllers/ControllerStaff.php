<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Http\Requests\NewOffertaRequest;
use App\Models\Resources\Offerta;

class ControllerStaff extends Controller
{
    protected $_modelCatalogo;
    
    public function __construct() {
        $this->_modelCatalogo = new Catalogo;
    }
    
    public function showAllOfferte() {
        $offerte = $this->_modelCatalogo->getOfferte();
        return view('visualizzaOfferte')
                        ->with('offerte',$offerte);
    }
    
    public function updateOfferta($idOfferta) {
        $offerta = $this->_modelCatalogo->getDettaglioOfferta($idOfferta);
        $aziende = $this->_modelCatalogo->getAziende()->pluck('ragioneSociale','idAzienda');
        return view('modificaOfferta')
                        ->with('aziende',$aziende)
                        ->with('offerta',$offerta);
    }
    //ricorda di cambiare il return quando userai il login
    public function storeOffertaModificata(NewOffertaRequest $richiesta, $idOfferta) {
        $offerta = $this->_modelCatalogo->getDettaglioOfferta($idOfferta)->first();
        $image = $richiesta->file('img');
        $imageName = $image->getClientOriginalName();
        $offerta->fill($richiesta->validated());
        $offerta->img = $imageName;
        $destinationPath = public_path() . '/css/images';
        $image->move($destinationPath, $imageName);
        $offerta->save();
        return redirect()->action([ControllerStaff::class, 'showAllOfferte']);
    }
    public function aggiungiOfferta(){
        $aziende = $this->_modelCatalogo->getAziende()->pluck('ragioneSociale','idAzienda');
        return view('aggiungiOfferta')
            ->with('aziende',$aziende);
    }
   
    public function storeOfferta(NewOffertaRequest $richiesta){
        $offerta = new Offerta;
        $image = $richiesta->file('img');
        $imageName = $image->getClientOriginalName();
        $offerta->fill($richiesta->validated());
        $offerta->img = $imageName;
        $destinationPath = public_path() . '/css/images';
        $image->move($destinationPath, $imageName);
        $offerta->save();
        return redirect()->action([ControllerPubblico::class, 'showOfferte']);
    }


}
