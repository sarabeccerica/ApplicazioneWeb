<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewOffertaRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'oggetto' => 'required|max:45',
            'descrizione' => 'required|max:45',
            'modalita' => 'required|max:45',
            'dataInizio' => 'required',
            'dataFine' => 'required',
            'luogoFruizione' => 'required|max:45',
            'precentualeSconto' => 'required|integer',
            'idAzienda' => 'required',
            'img' => 'required|image'
        ];
    }

}