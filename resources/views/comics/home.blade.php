@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>Fumetti</h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Serie</th>
          <th scope="col">Tipo</th>
          <th scope="col" colspan="3">Controlli</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->type}}</td>
            <td>
              <a href="{{route('comics.show', $comic)}}" class="btn btn-warning">Visualizza</a>
            </td>
            <td>
              <a href="{{route('comics.edit', $comic)}}" class="btn btn-outline-success">Modifica</a>
            </td>
            <td>
              <form action="{{route('comics.destroy', $comic)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger">Elimina</button>
              </form>
            </td>
          </tr>
        @endforeach
        
      </tbody>
    </table>
    {{$comics->links()}}
  </div>
@endsection