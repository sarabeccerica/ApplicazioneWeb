<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewProductRequest extends FormRequest {

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
            'name' => 'required|max:25',
            'cognome' => 'required',
            'genere' => 'required',
            'eta' => 'required|integer|min:15|max:90',
            'livello' => 'required|numeric|min:0',
            'email' => 'required',
            'telefono' => 'required|numeric',
            'username' => 'required|max:10',
            'password' =>'required|max:10'
        ];
    }

}