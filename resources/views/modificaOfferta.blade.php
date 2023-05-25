@extends('homepagePublic')

@section('title','Modifica offerta')

@section('content')
<div id="content">
@isset($offerta)
    <div class="box-sing-s">
            {{ Form::open(array('route' => ['modificaOfferta.store', $offerta[0]->idOfferta],'files'=>true, 'class' => '')) }}
            {{ Form::token() }}
            <div  class="form-container" align="center">
                {{ Form::label('oggetto', 'Oggetto:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('oggetto',$offerta[0]->oggetto, ['class' => 'form-input','id' => 'oggetto']) }}
                @if ($errors->first('oggetto'))
                <ul class="errors">
                    @foreach ($errors->get('oggetto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="form-container" align="center">
                {{ Form::label('decsrizione', 'Descrizione:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('descrizione',$offerta[0]->descrizione, ['class' => 'form-input','id' => 'descrizione']) }}
                @if ($errors->first('descrizione'))
                <ul class="errors">
                    @foreach ($errors->get('descrizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="form-container" align="center">
                {{ Form::label('modalita', 'Modalità:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('modalita',$offerta[0]->modalita, ['class' => 'form-input','id' => 'modalita']) }}
                @if ($errors->first('modalita'))
                <ul class="errors">
                    @foreach ($errors->get('modalita') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div> 
            <div  class="form-container" align="center">
                {{ Form::label('luogoFruizione', 'Luogo fruizione:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('luogoFruizione',$offerta[0]->luogoFruizione, ['class' => 'form-input','id' => 'luogoFruizione']) }}
                @if ($errors->first('luogoFruizione'))
                <ul class="errors">
                    @foreach ($errors->get('luogoFruizione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="form-container" align="center">
                {{ Form::label('percentualeSconto', 'Percentuale sconto:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('percentualeSconto',$offerta[0]->percentualeSconto, ['class' => 'form-input','id' => 'percentualeSconto']) }}
                @if ($errors->first('percentualeSconto'))
                <ul class="errors">
                    @foreach ($errors->get('percentualeSconto') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <!-- si può modificare l'id dell'azienda? 
            inoltre come si può inserire un file di defualt? 
            in che senso le offerte devono essere visualizzate per azienda?-->
            <div  class="form-container" align="center">
                {{ Form::label('azienda', 'Azienda', ['class' => 'form-label']) }}
                <br>
                {{ Form::select('azienda',$aziende,$offerta[0]->idAzienda, ['class' => 'form-controls','id' => 'azienda']) }}
                @if ($errors->first('azienda'))
                <ul class="errors">
                    @foreach ($errors->get('azienda') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <!-- non funziona da errore dell'immagine -->
            <div  class="form-container" align="center">
                {{ Form::label('img', 'Immagine:', ['class' => 'form-label']) }}
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
            <div class="form-container">  
                <div align="center" class="prova">
                    {{ Form::submit('Conferma', ['class' => 'form-button','type' => 'submit']) }}
                </div>
            </div>

            {{ Form::close() }}
    </div>
@endisset()
</div>
@endsection

