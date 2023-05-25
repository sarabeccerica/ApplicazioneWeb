@extends('homepagePublic')

@section('title','Admin Home')

@section('content')
<div id="content">
    <div align="center">
        <h1 style="color: black">Bentornato Nome</h1>
        <h3 style="color: black">Da questa pagina potrai gestire tutte le AZIENDE</h3>
        <br><br>
    </div>
    <div class="chat-container">
        <div class="chat ">
            <div class="contenitore-funzioni ">
                <div class="box-funzioni">
                    <a href="#add"><h2>Aggiungi Azienda</h2></a>
                </div>
                <div class="box-funzioni">
                    <a href="#update"><h2>Modifica Azienda</h2></a>
                </div>
                <div class="box-funzioni">
                    <a href="#delete"><h2>Elimina Azienda</h2></a>
                </div>
            </div>
            @isset($aziende)
            <div class="table-gestione-aziende">
                <table>
                    <thead>
                        <tr>
                            <th>Ragione Sociale</th>
                            <th>Tipologia</th>
                            <th>Descrizione</th>
                            <th>Via</th>
                            <th>Numero Civico</th>
                            <th>Città</th>
                            <th>CAP</th>
                            <th>Mail</th>
                            <th>Telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aziende as $azienda)
                        <tr>
                            <td>{{ $azienda->ragioneSociale }}</td>
                            <td>{{ $azienda->tipologia }}</td>
                            <td>{{ $azienda->descrizione }}</td>
                            <td>{{ $azienda->via }}</td>
                            <td>{{ $azienda->numeroCivico }}</td>
                            <td>{{ $azienda->citta }}</td>
                            <td>{{ $azienda->CAP }}</td>
                            <td>{{ $azienda->mail }}</td>
                            <td>{{ $azienda->telefono }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endisset()
        </div>
    </div>
</div>
@endsection


