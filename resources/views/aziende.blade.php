@extends('homepagePublic')

@section('title','Elenco aziende')

@section('content')
<div id="content">
    @isset($aziende)
    <div id="tit" >
        <p>Queste sono le nostrea aziende</p>
    
    </div>
    <div class="box">
        <div class="row">
        @foreach($aziende as $azienda)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5" >
                <div style="display: flex; align-items: center; justify-content: center;">
                <figure class="effect-ming tm-video-item" style="text-align: center">
                    <img src="{{ asset('css/images/'.$azienda->logo)}}" alt="Image" class="img-fluid" >
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{$azienda->regioneSociale}}</h2>
                         <a href="{{route('offerteAzienda',[$azienda->idAzienda])}}">View more</a>
                    </figcaption>                    
                </figure>
                
                </div>
                <div style="display: flex; align-items: center; justify-content: center;">
                <div class="d-flex justify-content-between tm-text-gray" style="text-align: center">
                    <span class="tm-text-gray-light">{{$azienda->descrizione}}</span>
                </div>
                </div>
            </div>
        @endforeach
            </div>
    </div>
        
    @endisset()
    @isset($offerteAzienda)
    @isset($azienda)
    <div id="tit" >
        <p>Queste sono le offerte di {{$azienda[0]->ragioneSociale}}</p>
    
    </div>
    <div class="box">
        <div class="row">
        @foreach($offerteAzienda as $offerta)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5" style="text-align: center">
                <div style="display: flex; align-items: center; justify-content: center;">
                <figure class="effect-ming tm-video-item" style="text-align: center">
                    <img src="{{ asset('css/images/'.$offerta->img)}}" alt="Image" class="img-fluid" >
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{$offerta->oggetto}}</h2>
                         <a href="{{route('dettaglioOfferta',[$offerta->idOfferta])}}">View more</a>
                    </figcaption>                    
                </figure>
                
                </div>
                <div style="display: flex; align-items: center; justify-content: center;">
                <div class="d-flex justify-content-between tm-text-gray" style="text-align: center">
                    <span class="tm-text-gray-light">{{$offerta->descrizione}}</span>
                </div>
                </div>
            </div>
        @endforeach
            </div>
        </div>
    @endisset()
    @endisset()
    
</div>
@endsection