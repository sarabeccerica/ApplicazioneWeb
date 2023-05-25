<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Resources\Utente;

class ModelUtente {
    
    public function getAccount($idUtente) {
        $account = Utente::where('idUtente',$idUtente)->get();
        return $account;
    }
    
    public function getAllAccount() {
        return Utente::all();
    }
    
    public function CouponIsUsed($idOfferta, $idUtente){
        $coupon = Coupon::where('idUtente',$idUtente)->get();
        $coupon = $coupon->where('idOfferta', $idOfferta)->get();
        if ($coupon->get()) {
            return true;
        }
        return false;
    }
    
    public function getCoupon($idOfferta,$idUtente){
        $coupon = new Coupon;
        $coupon->idUtente = $idUtente;
        $coupon->idOfferta = $idOfferta;
        $coupon->dataCreazione = Carbon::today();
        $coupon->save();
        return $coupon;
    }
}
