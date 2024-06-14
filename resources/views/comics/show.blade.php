@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h1>Dettagli Fumetti: {{ $comic->title }}</h1>
    <img class="w-25 py-5" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    <dl>
        <dt>Dettagli</dt>
        <dd>{{ $comic->description }}</dd>
        <dd>Prezzo: {{ $comic->price }}</dd>
        <dd>Serie: {{ $comic->series }}</dd>
        <dd>Riedizione: {{ $comic->sale_date }}</dd>
        <dd>Tipologia: {{ $comic->type }}</dd>
    </dl>
</div>    
@endsection