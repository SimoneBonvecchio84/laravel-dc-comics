@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista Fumetti</h1>
        <table class="table">
            <div class="py-4">
                <a class="btn btn-success" href="{{ route('comics.create') }}">Inserisci un nuovo fumetto</a>
            </div>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Dettagli</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Cancella</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comicsArray as $curComic)
                    <tr>
                        <th scope="row">{{ $curComic->id }}</th>
                        <td>{{ $curComic->title }}</td>
                        <td>{{ $curComic->price }}</td>
                        <td>{{ $curComic->series }}</td>
                        <td class="d-flex gap-3">
                            <a class="btn btn-success" href="{{ route('comics.show', [$curComic->id]) }}">Dettagli</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('comics.edit', [$curComic->id]) }}">Modifica</a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', [$curComic->id]) }}" method="POST" class="deleteBtn" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger md_btn" type="submit" data-pasta-title="{{ $curComic->title }}" >CANCELLA</button>
                            </form>
                        </td>                       
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="modal" tabindex="-1" id="delete-modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 id="modal-title">Sei Sicuro Di Voler Eliminare il Fumetto?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                  <button type="button" class="btn btn-danger" id="modal-delete-btn">Elimina</button>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection
