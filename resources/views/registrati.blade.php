<div  class="split left-r">
    <div class="centered-left">
        <h1 class = "login-title"> REGISTRATI</h1> <br>
        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat</p>
        </div>
   </div>
<div class="split right-r">
        <div class="centered regist-right">
            {{ Form::open(array('route' => 'aggiungiAccount.store', 'class' => '')) }}
            {{ Form::token() }}
            {{ Form::label('name', 'NOME') }}
            {{ Form::text('name', '', ['class' => 'login-input','placeholder' => 'ex. Mario', 'id' => 'name']) }}
            @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            {{ Form::label('cognome', 'COGNOME') }}
            {{ Form::text('cognome', '', ['class' => 'login-input','placeholder' => 'ex. Rossi', 'id' => 'cognome']) }}
            @if ($errors->first('cognome'))
                <ul class="errors">
                    @foreach ($errors->get('cognome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            {{ Form::label('genere', 'GENDER') }}<br>
            {{ Form::select('genere', ['f' => 'Donna', 'm' => 'Uomo', 'a' => 'Altro'], ['class' => 'input','id' => 'genere']) }}<br>
            @if ($errors->first('genere'))
                <ul class="errors">
                    @foreach ($errors->get('genere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            {{ Form::label('eta', 'ETA') }}<br>
            {{ Form::text('eta', '', ['class' => 'login-input','placeholder' => 'La tua età', 'id' => 'eta']) }}<br>
            @if ($errors->first('eta'))
                <ul class="errors">
                    @foreach ($errors->get('eta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            {{ Form::label('email', 'E-MAIL') }}
            {{ Form::text('email', '', ['class' => 'login-input','placeholder' => 'La tua email', 'id' => 'email']) }}
            @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            {{ Form::label('telefono', 'TELEFONO') }}
            {{ Form::text('telefono', '', ['class' => 'login-input','placeholder' => '+39 333 3333333', 'id' => 'telefono']) }}
            @if ($errors->first('telefono'))
                <ul class="errors">
                    @foreach ($errors->get('telefono') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
            @endif
            {{ Form::label('password', 'PASSWORD') }}
            {{ Form::text('password', '', ['class' => 'login-input','placeholder' => 'La tua password', 'id' => 'password']) }}
        </div>
         <div class="regist-footer">
            <button class = "popup-button"type="submit" onclick = "closePopup('popup2')">REGISTRATI</button> 
         </div>
                {{ Form::close() }}
</div>