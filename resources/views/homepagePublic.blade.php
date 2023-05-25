<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/cssAlessio.css') }}" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>homepage</title>
    </head>
     <body>
        <div id="wrapper">
            <div id="header"></div>
 
            </div>
           <div id="menu">
                @include('layout/navbarPublic')
            </div>
            <div id="content">
                <div id="page-bgtop">
                    <div id="page-bgbtm">
                         @yield('content')
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                    </div>
                </div>
            <div class= "container">
                <div class ="popup" id = "popup">
                    @include('auth/login')
                    <script>
                    function openPopup(popupId) {
                            var popup = document.getElementById(popupId);
                            popup.style.display = "block";
                    }

                    function closePopup(popupId) {
                            var popup = document.getElementById(popupId);
                            popup.style.display = "none";
                    }
                </script>
                </div>
            </div>
            <div id="footer">
                <a class = "faq" href="{{ route('FAQ')}}" title="faq">FAQ</a>
                <a class = "contatti" href="mailto:info@acme.it" title="Mandaci un messaggio">Contattaci</a>
            </div>
        </div>
    </body>
</html>


