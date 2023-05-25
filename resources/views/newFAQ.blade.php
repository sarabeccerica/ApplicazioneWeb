@extends('homepagePublic')

@section('title','Domande Frequenti')

@section('content')
<div id="content">
    <div align="center">
        <h1 style="color: black">Inserisci nuove FAQ</h1>
        <br><br>
    </div>
    <div class="chat-container">
        <div class="chat">

            {{ Form::open(array('route' => 'nuovafaq.store', 'class' => '')) }}
            {{ Form::token() }}

            <div  class="wrap-input" align="center">
                {{ Form::label('domanda', 'Inserisci qui la domanda', ['class' => 'label-input']) }}
                <br>
                {{ Form::textarea('domanda', '', ['class' => 'inputFormFaq','id' => 'domanda']) }}
            </div>

            <div  class="wrap-input" align="center">
                {{ Form::label('risposta', 'Inserisci qui la risposta', ['class' => 'label-input']) }}
                <br>
                {{ Form::textarea('risposta', '', ['class' => 'inputFormFaq', 'id' => 'risposta']) }}
            </div>

            <div class="container-form-btn">  
                <div align="center" class="prova1234">
                    {{ Form::reset('Cancella i dati', ['class' => 'buttoninserimentofaq']) }}
                </div>
                <div align="center" class="prova1234">
                    {{ Form::submit('Conferma inserimento', ['class' => 'buttoninserimentofaq']) }}
                </div>
            </div>

            {{ Form::close() }}
        </div>

    </div>
</div>
@endsection