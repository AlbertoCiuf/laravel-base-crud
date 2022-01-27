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
          <th scope="col">Controlli</th>
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
              <a href="#" class="btn btn-warning">Visualizza</a>
            </td>
          </tr>
        @endforeach
        
      </tbody>
    </table>
    {{$comics->links()}}
  </div>
@endsection