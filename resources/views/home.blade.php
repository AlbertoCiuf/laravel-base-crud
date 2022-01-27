@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>Homepage</h1>
    <p>Vai alla pagina <a href="{{route('comics.index')}}">Comics</a> per visualizzare la lista. </p>
  </div>
@endsection