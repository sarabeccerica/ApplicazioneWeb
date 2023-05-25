<?php

namespace App\Http\Controllers;

use App\Models\ModelFaq;
use App\Models\Resources\Faq;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\FaqRequest;
use Carbon\Carbon;

class ControllerFaq extends Controller {

    protected $_modelFaq;
    
    
    public function __construct() {
        $this->_modelFaq = new ModelFaq;
    }

    public function showFAQ() {
        $faq = $this->_modelFaq->getFAQ();
        return view('FAQ')
                        ->with('faq', $faq);
    }
    
    public function storeFaq(FaqRequest $richiesta ) {
        $faq = new Faq;
        $dataOdierna = Carbon::today();
        $faq->dataInserimento = $dataOdierna;
        $faq->codiceFAQ = 120;
        $faq->fill($richiesta->validated());
        $faq->save();
        
        return redirect()->action([ControllerFaq::class, 'showFAQ']);
    }
}

