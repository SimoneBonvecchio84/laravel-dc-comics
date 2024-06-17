@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista Fumetti</h1>
        <table class="table">
            <div>
              <a class="btn btn-success" href="{{ route('comics.create') }}">Inserisci un nuovo fumetto</a>
            </div>
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($comicsArray as $curComic)
                <tr>
                  <th scope="row">{{ $curComic->id }}</th>
                  <td>{{ $curComic->title }}</td>
                  <td>{{ $curComic->price }}</td>
                  <td>{{ $curComic->series }}</td>
                  <td class="d-flex gap-3" >
                    <a class="btn btn-success" href="{{ route('comics.show',[ $curComic->id]) }}">Dettagli</a>
                    <a class="btn btn-warning" href="{{ route('comics.edit',[ $curComic->id]) }}">Modifica</a>
                    <form action="{{ route('comics.destroy',  [$curComic->id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger">CANCELLA</button>
                    </form>
                  </td>
                </tr>                    
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
