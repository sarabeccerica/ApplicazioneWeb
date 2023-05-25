@extends('homepagePublic')

@section('title','Inserisci Offerta')

@section('content')
<div id="content">
    <div class="box-sing-s">
        {{ Form::open(array('route' => 'aggiungiOfferta.store', 'class' => '')) }}
        {{ Form::token() }}
       
        <div  class="form-container" align="center">
                {{ Form::label('oggetto', 'Oggetto', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('oggetto','',['class' => 'form-input','placeholder' => 'Oggetto della nuova offerta ex. banane','id' => 'oggetto']) }}
                @if ($errors->first('oggetto'))
                <ul class="errors">
                    @foreach ($errors->get('oggetto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div  class="form-container" align="center">
                {{ Form::label('descrizione', 'Descrizione', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('descrizione','', ['class' => 'form-input','placeholder' => 'Descrizione della nuova offerta','id' => 'descrizione']) }}
                @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div  class="form-container" align="center">
                {{ Form::label('modalita', 'Modalita', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('modalita','', ['class' => 'form-input','placeholder' => 'ex sconto con importo minimo','id' => 'modalita']) }}
                @if ($errors->first('modalita'))
                <ul class="errors">
                    @foreach ($errors->get('modalita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div  class="form-container" align="center">
                {{ Form::label('dataInizio', 'Data Inizio', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('dataInizio','', ['class' => 'form-input','id' => 'dataInizio']) }}
                @if ($errors->first('dataInizio'))
                <ul class="errors">
                    @foreach ($errors->get('dataInizio') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div  class="form-container" align="center">
                {{ Form::label('dataFine', 'Data Fine', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('dataFine','', ['class' => 'form-input','id' => 'dataFine']) }}
                @if ($errors->first('dataFine'))
                <ul class="errors">
                    @foreach ($errors->get('dataFine') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div  class="form-container" align="center">
                {{ Form::label('luogoFruizione', 'Luogo Fruizione', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('luogoFruizione','', ['class' => 'form-input','placeholder' => 'Dove si può usare la nuova offerta','id' => 'luogoFruizione']) }}
                @if ($errors->first('luogoFruizione'))
                <ul class="errors">
                    @foreach ($errors->get('luogoFruizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div  class="form-container" align="center">
                {{ Form::label('percentualeSconto', 'Percentuale Sconto', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('percentualeSconto','', ['class' => 'form-input','placeholder' => 'ex 20','id' => 'percentualeSconto']) }}
                @if ($errors->first('percentualeSconto'))
                <ul class="errors">
                    @foreach ($errors->get('percentualeSconto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div  class="form-container" align="center">
                {{ Form::label('azienda', 'Azienda', ['class' => 'form-label']) }}
                <br>
                {{ Form::select('azienda',$aziende,null, ['class' => 'form-controls','id' => 'azienda']) }}
                @if ($errors->first('azienda'))
                <ul class="errors">
                    @foreach ($errors->get('azienda') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        </div>
        <div  class="form-container" align="center">
                {{ Form::label('img', 'Immagine', ['class' => 'form-label']) }}
                <br>
                {{ Form::file('img', ['class' => 'form-controls','id' => 'img']) }}
                @if ($errors->first('img'))
                <ul class="errors">
                    @foreach ($errors->get('img') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
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
@endsection

