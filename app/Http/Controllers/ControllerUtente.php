<?php

namespace App\Http\Controllers;

use App\Models\ModelUtente;
use App\Http\Requests\ModificaAccountRequest;

class ControllerUtente extends Controller
{
    protected $_modelUtente;
    
    public function __construct() {
        $this->_modelUtente = new ModelUtente;
    }

    public function index() {
        return view('home');
    }
    //ricorda di togliere questo metodo quando userai il login
    public function showAllAccount() {
        $allAccount = $this->_modelUtente->getAllAccount();
        return view('accountUtente')
                ->with('account',$allAccount);
    }

    public function showAccount($idUtente) {
        $utente = $this->_modelUtente->getAccount($idUtente);
        return view('accountUtente')
                        ->with('dettaglioUtente',$utente);
    }
    
    public function updateAccount($idUtente) {
        $utente = $this->_modelUtente->getAccount($idUtente);
        return view('modificaAccount')
                        ->with('dettaglioUtente',$utente);
    }
    //ricorda di cambiare il return quando userai il login
    public function storeAccount(ModificaAccountRequest $richiesta, $idUtente) {
        $account = $this->_modelUtente->getAccount($idUtente)->first();
        $account->fill($richiesta->validated());
        $account->save();
        return redirect()->action([ControllerUtente::class, 'showAllAccount']);
    }
    
    public function showCoupon($idOfferta,$idUtente){
        if($controlloUtilizzo = $this->_modelCatalogo->CouponIsUsed($idOfferta,$idUtente))
                $coupon = $this->_modelCatalogo->getCoupon($idOfferta, $idUtente);
        $offerta = $this->_modelCatalogo->getDettaglioOfferta($idOfferta);
        return view('Coupon')
            ->with('Coupon',$Coupon)
            ->with('Offerta', $offerta);
    }
    
   

}
