@extends('homepagePublic')

@section('title','Domande Frequenti')

@section('content')
<div id="content">
    @isset($faq)
    <h1 style="text-align: center; color: black">Qui potrai vedere tutte le domande frequenti</h1>
    <br>
    <br>
    @foreach($faq as $domanda)
    <div class="chat-container">
        <div class="chat">
            <div class="hr-centered">
                <hr>
                <p style="margin-top: 0px; color: black">{{$domanda->dataInserimento}}</p>
            </div>
            <div class="question"><p class="message-bubble">{{$domanda->domanda}}</p></div>
            <div class="answer"><p class="message-bubble">{{$domanda->risposta}}</p></div>

        </div>
    </div>
    
    
    <!-- Aggiungi altre domande e risposte qui -->
    @endforeach
    @endisset()
    <div align="center">
        <button class="buttoninserimentofaq" onclick="window.location.href = '{{ route('nuovafaq') }}'"> Clicca qui per inserire una nuova faq </button>
    </div>
</div>
@endsection
