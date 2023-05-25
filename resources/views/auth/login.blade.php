<div  class="split left">
    <div class="centered-left">
        <h1 class = "login-title"> LOGIN </h1> <br>
        <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat</p>
        </div>
   </div>
<div class="split right">
        <div class="centered-right">
            
            {{ Form::label('username', 'USERNAME') }}
            {{ Form::text('username', '', ['class' => 'login-input','placeholder' => 'Il tuo username', 'id' => 'username']) }}
            {{ Form::label('password', 'PASSWORD') }}
            {{ Form::text('password', '', ['class' => 'login-input','placeholder' => 'La tua password', 'id' => 'password']) }}
            <span id="toggle-psw" onclick="togglePasswordVisibility()"></span>
            <script>
                function togglePasswordVisibility(){
                    const passwordInput = document.getElementById('psw-user');
                    const togglePassword = document.getElementById('toggle-psw');
                    
                    if (passwordInput.type==='password'){
                        passwordInput.type='text';
                        togglePassword.classList.add('visible');
                    }
                    else{
                        passwordInput.type='text';
                        togglePassword.classList.remove('visible');
                    }
                }
            </script>
        </div>
         <div class="login-footer">
            <button class = "popup-button"type="submit" onclick = "closePopup('popup1')">SIGN-IN</button>
            <button class = "popup-button"type="button" onclick = "openPopup('popup2'); closePopup('popup1')">REGISTRATI</button> 
         </div>
        <br><h2>Hai dimenticato la password?<a href="https://www.youtube.com/watch?v=SpfEl3MQAD4">Clicca qui!</a></h2>

</div>