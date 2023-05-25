@extends('homepagePublic')

@section('title','Admin Home')

@section('content')
<div id="content">
    <div align="center">
        <h1 style="color: black">Bentornato Nome</h1>
        <h3 style="color: black">Da questa pagina potrai gestire tutte le operazioni</h3>
        <br><br>
    </div>
    <div class="chat-container">
        <div class="chat ">
            <div class="contenitore-funzioni ">
                <div class="box-funzioni">
                    <a href="#user"><h2>Gestione Utenti</h2></a>
                </div>
                <div class="box-funzioni">
                    <a href="#staff"><h2>Gestione Staff</h2></a>
                </div>
                <div class="box-funzioni">
                    <a href="{{route('gestioneAziendeHome')}}"><h2>Gestione Aziende</h2></a>
                </div>
            </div>
            <div class="contenitore-funzioni ">
                <div class="box-funzioni">
                    <a href="#stats"><h2>Statistiche</h2></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
