<?php

namespace App\Models;

use App\Models\Resources\Azienda;
use App\Models\Resources\Offerta;
use App\Models\Resources\OffertaAbbinata;
use App\Models\Resources\Coupon;
use App\Models\Resources\Utente;
use Illuminate\Pagination\Paginator;


class Catalogo {
    
    public function getOfferteByAzienda($idAzienda, $paged =1){
        $offerteAzienda = Offerta::where('idAzienda', $idAzienda)->get();
        return $offerteAzienda;
    }
    //NON HO IDEA SE FUNZIONA O NO
    public function CouponIsUsed($idOfferta, $idUtente){
        $coupon = Coupon::where('idUtente','=',$idUtente);
        $coupon = $coupon->where('idOfferta','=',$idOfferta);
        if ($coupon->get()) {
            return true;
        }
        return false;
    }
    
    public function getAziende($paged =1){
        return Azienda::all();
    }
    
    public function getAzienda($idAzienda){
        return Azienda::where('idAzienda', $idAzienda)->get();
    }
    
    //ritorna tutte le offerte ordinate per azienda
    public function getOfferte($paged =1){
        return Offerta::all()->sortBy('idAzienda');
    }
    
    public function getDettaglioOfferta($idOfferta){
        $dettaglioOfferta = Offerta::where('idOfferta', $idOfferta)->get();
        return $dettaglioOfferta;
    }
    
}
