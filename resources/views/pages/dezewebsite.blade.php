@extends('main')

@section('title')
    Deze website
@endsection

@section('body')
<div id="navbar">

<div id="logo">
<img src="/images/logo.png" alt="plaatje van logo">
</div>

<div id="home">
<a href="/"><h2>Home</h2></a>
</div>

<div id="projecten">
    <h2>Projecten</h2>


   </div>

<div id="overmij">
<a href="/overmij"><h2>Over mij</h2></a>
</div>

<div id=taal>
    
    <a href="/en/home">
    <img src="/images/uk.png" alt="">
    </a>

    </div>

</div>

<div id="terug">
    <a href="/projecten">Ga terug</a>

</div>

<div id="dezewebsitetekst">

</div>

@endsection