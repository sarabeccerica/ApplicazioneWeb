@extends('homepagePublic')

@section('title','Elenco offerte')

@section('content')
<div id="content">

    @isset($offerte)
    <div id="tit" >
        <p>Queste sono le nostre offerte</p>
    
    </div>
    <div class="box">
        <div class="row">
        @foreach($offerte as $offerta)
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
    

    @isset($dettaglioOfferta)
    
        <div class="box-sing">
            
            <p id="tit">{{ $dettaglioOfferta[0]->oggetto }}</p>
            <div class="container">
                <div class="scritte-off">
                    <p class="meta">Tipo offerta: {{ $dettaglioOfferta[0]->modalita }}</p>
                    <p class="meta">Inizio offerta: {{ $dettaglioOfferta[0]->dataInizio }}</p>
                    <p class="meta">Fine offerta: {{ $dettaglioOfferta[0]->dataFine }}</p>
                    <p class="meta">Luogo fruizione offerta: {{ $dettaglioOfferta[0]->luogoFruizione }}</p>
                    <p class="meta">Descrizione: {{ $dettaglioOfferta[0]->descrizione }}</p>
                    <p class="meta">Sconto {{ $dettaglioOfferta[0]->percentualeSconto }}%</p>
                </div>
            <div class="img-off">
                <img src="{{ asset('css/images/'.$dettaglioOfferta[0]->img)}}" alt="Image" class="img-off" >
            </div>
            </div>
            <div align="center">
        <button class="buttonottenimentocoupon" onclick="window.location.href = ''"> Ottieni coupon </button>
    </div>
        </div>
    
    @endisset()
</div>
@endsection