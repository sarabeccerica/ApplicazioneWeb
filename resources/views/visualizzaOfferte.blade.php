@extends('homepagePublic')

@section('title','Elenco offerte')

@section('content')
<div id="content">

    @isset($offerte)
    <div id="tit" >
        <p>Scegli l'offerta da modificare.</p>
    
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
                         <a href="{{route('modificaOfferta',[$offerta->idOfferta])}}">View more</a>
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
</div>
@endsection