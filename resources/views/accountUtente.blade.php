@extends('homepagePublic')

@section('title','Account')

@section('content')
<div id="content">
    @isset($account)
    <p>ciao scema</p>
        @foreach($account as $utente)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5" style="text-align: center">
                <div style="display: flex; align-items: center; justify-content: center;">
                <figure class="effect-ming tm-video-item" style="text-align: center">
                    <img src="" alt="Image" class="img-fluid" >
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{$utente->nome}}</h2>
                         <a href="{{route('accountUtente',[$utente->idUtente])}}">View more</a>
                    </figcaption>                    
                </figure>
                
                </div>
                <div style="display: flex; align-items: center; justify-content: center;">
                <div class="d-flex justify-content-between tm-text-gray" style="text-align: center">
                    <span class="tm-text-gray-light">{{$utente->email}}</span>
                </div>
                </div>
            </div>
        @endforeach
    @endisset()
    @isset($dettaglioUtente)
    <div class="box-sing">
        <p id="tit">Ciao {{ $dettaglioUtente[0]->username }}!</p>
        <div class="scritte-off">
            <p class="meta">Nome: {{ $dettaglioUtente[0]->nome }}</p>
            <p class="meta">Cognome: {{ $dettaglioUtente[0]->cognome }}</p>
            <p class="meta">Eta: {{ $dettaglioUtente[0]->eta }}</p>
            <p class="meta">Email: {{ $dettaglioUtente[0]->email }}</p>
            <p class="meta">Genere: {{ $dettaglioUtente[0]->genere }}</p>
            <p class="meta">Telefono: {{ $dettaglioUtente[0]->telefono }}</p>
        </div>
    </div>
    <div align="center">
        <button class="button-ut" onclick="window.location.href = '{{route('modificaAccount',[$dettaglioUtente[0]->idUtente])}}'"> Modifica account </button>
        <!--non so come fare funzionare la delete sono stanca buonanotte-->
    </div>
 </div>
 
@endisset
</div>
@endsection
