@extends('homepagePublic')

@section('title','Modifica account')

@section('content')
<div id="content">
@isset($dettaglioUtente)
    <div class="box-sing-s">
            {{ Form::open(array('route' => ['modificaAccount.store', $dettaglioUtente[0]->idUtente], 'class' => '')) }}
            {{ Form::token() }}
            <div  class="form-container" align="center">
                {{ Form::label('nome', 'Nome:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('nome',$dettaglioUtente[0]->nome, ['class' => 'form-input','id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="form-container" align="center">
                {{ Form::label('cognome', 'Cognome:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('cognome',$dettaglioUtente[0]->cognome, ['class' => 'form-input','id' => 'cognome']) }}
                @if ($errors->first('cognome'))
                <ul class="errors">
                    @foreach ($errors->get('cognome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="form-container" align="center">
                {{ Form::label('eta', 'Età:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('eta',$dettaglioUtente[0]->eta, ['class' => 'form-input','id' => 'eta']) }}
                @if ($errors->first('eta'))
                <ul class="errors">
                    @foreach ($errors->get('eta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div> <!-- non funziona questo sotto non mi cambia nel db perche?? -->
            <div  class="form-container" align="center">
                {{ Form::label('genere', 'Genere:', ['class' => 'form-label']) }}
                <br>
                {{ Form::select('genere',['f'=>'Donna','m'=>'Uomo','a'=>'Altro'],$dettaglioUtente[0]->genere, ['class' => 'form-controls','id' => 'genere']) }}
                @if ($errors->first('genere'))
                <ul class="errors">
                    @foreach ($errors->get('genere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="form-container" align="center">
                {{ Form::label('email', 'Email:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('email',$dettaglioUtente[0]->email, ['class' => 'form-input','id' => 'email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div  class="form-container" align="center">
                {{ Form::label('telefono', 'Telefono:', ['class' => 'form-label']) }}
                <br>
                {{ Form::text('telefono',$dettaglioUtente[0]->telefono, ['class' => 'form-input','id' => 'telefono']) }}
                @if ($errors->first('telefono'))
                <ul class="errors">
                    @foreach ($errors->get('telefono') as $message)
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

