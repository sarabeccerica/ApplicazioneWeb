@extends ('homepagePublic')
@section('title','Home')

@section('content')
<div id="home">
    <div class="about-us">
        <img src="{{ asset('css/images/maxresdefault.gif')}}" alt="Image" width="640" height="350">                
    <div class="about-us-testo">
        <h1>About Us</h1>
        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
            tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
            aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
    </div>
    </div>
</div>
<div id= "dove-siamo">
        <br>
        <center>
            <h1>Dove Siamo</h1><br>
            <iframe width="428" height="352" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=Via+Brecce+Bianche,+12,+Ancona&amp;aq=0&amp;sll=41.442726,12.392578&amp;sspn=23.377375,53.657227&amp;ie=UTF8&amp;hq=&amp;hnear=Via+Brecce+Bianche,+12,+60131+Ancona,+Marche&amp;z=14&amp;ll=43.581248,13.515684&amp;output=embed"></iframe><br /><small>
        </center>
    </div>
@endsection