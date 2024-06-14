@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista Fumetti</h1>
        <table class="table">
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
                </tr>                    
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
