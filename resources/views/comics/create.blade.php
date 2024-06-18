@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="py-3">Inserisci un nuovo Fumetto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                   <li>{{ $error }}</li> 
                @endforeach
            </ul>
        </div> 
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            {{-- Cookie per riconoscere il form al server --}}
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input value="{{ old('title') }}" type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description" rows="3">
                    {{ old('description') }}
                </textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Poster</label>
                <input value="{{ old('thumb') }}" type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input value="{{ old('price') }}" type="number" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input value="{{ old('series') }}" type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Riedizione del</label>
                <input value="{{ old('sale_date') }}" type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input value="{{ old('type') }}"  type="text" class="form-control" id="type" name="type">
            </div>
            <div class="py-3">
                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        </form>
    </div>
@endsection
