@extends('layouts.main')

@section('content')
  <div class="container ">
    <div class="row">
      <div class="col-8 offset-2">
        <h2>Stai modificando: {{$comic->title}}</h2>
        <form action="{{route('comics.update', $comic)}}" method="POST" class="py-3">
          @csrf
          @method('PUT')
          <label for="title">Titolo</label>
          <input type="text" value="{{$comic->title}}" name="title" id="title">
    
          <label for="description">Descrizione</label>
          <textarea type="text" name="description" id="description">{{$comic->description}}</textarea>
          
          <label for="thumbnail">URL Thumbnail</label>
          <input type="text" value="{{$comic->thumbnail}}"name="thumbnail" id="thumbnail">
    
          <label for="price">Prezzo</label>
          <input type="text" value="{{$comic->price}}"name="price" id="price">
    
          <label for="series">Serie</label>
          <input type="text"value="{{$comic->series}}" name="series" id="series">
    
          <label for="sale_date">Data (YYYY-MM-DD)</label>
          <input type="text"value="{{$comic->sale_date}}" name="sale_date" id="sale_date">
    
          <label for="type">Tipo</label>
          <input type="text" value="{{$comic->type}}" name="type" id="type">
    
          <button type="submit" class="btn btn-primary" >Invia</button>
          <button type="reset" class="btn btn-secondary" >Reset</button>

        </form>
    
        

      </div>
    </div>
  </div>
@endsection