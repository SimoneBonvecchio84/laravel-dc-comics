@extends('layouts.app')

@section('content')
    
  <div class="container">
    <h1>Modifica Fumetto</h1>

    @if ($errors->any())
     <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
     </div>
        
    @endif
    <form action="{{ route('comics.update', ['comic' => $comic->id ]) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input value="{{ old('title', $comic->title) }}" type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3">
                {{ old('description', $comic->description)}}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Poster</label>
            <input value="{{ old('thumb', $comic->thumb) }}" type="text" class="form-control" id="thumb" name="thumb" >
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input value="{{ old('thumb', $comic->price) }}" type="number" class="form-control" id="price" name="price" >
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series"
            value="{{ $comic->series }}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Riedizione del</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type"
            value="{{ old('type', $comic->type) }}">
        </div>
       
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
      </form>
  </div>

@endsection