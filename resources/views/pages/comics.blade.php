@extends('layouts.app')

@section('content')

<div>
    @include('partials.jumbotron')
</div>

<section id="comics">

    @include('partials.comics')
    @include('partials.banner')

</section>

@endsection