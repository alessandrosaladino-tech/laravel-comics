@extends('layouts.app')

@section('content')

<div>
    @include('partials.jumbotron')
</div>

<section id="welcome">

    <h2 class="text-white py-5">
        Questa è la home page,vai alla pagina <a href="{{route('comics')}}">COMICS</a>
    </h2>



</section>

@endsection
</html>