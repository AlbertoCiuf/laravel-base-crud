@extends('layouts.main')

@section('content')
  <div class="container">
    <h1 class="py-3">Fumetto Selezionato</h1>
    <div class="row">
      <div class="col-6">
        <div class="comic-details d-flex">
          <div class="c-text">
            <h3>{{$comic->title}}</h3>
            <p>{{$comic->description}}</p>
            <small>€{{$comic->price}}</small>
          </div>
        </div>
      </div>
      <div class="col-6">
        <img src="{{$comic->thumbnail}}" alt="{{$comic->slug}}" class="img-fluid">
      </div>
    </div>

    <a href="{{route('comics.index', $comic)}}" class="btn btn-warning">Torna alla Lista</a>
  </div>
@endsection