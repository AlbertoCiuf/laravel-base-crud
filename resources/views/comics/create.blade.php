@extends('layouts.main')

@section('content')
  <div class="container ">
    <div class="row">
      <div class="col-8 offset-2">
        <h2>Inserisci un nuovo fumetto</h2>
        <form action="{{route('comics.store')}}" method="POST" class="py-3">
          @csrf
          <label for="title">Titolo</label>
          <input type="text" name="title" id="title">
          @if ($errors->has('title'))
            <span class="text-danger">Il campo è obbligatorio; lunghezza minima 3 caratteri.</span>
          @endif
    
          <label for="description">Descrizione</label>
          <textarea type="text" name="description" id="description"></textarea>
          
          <label for="thumbnail">URL Thumbnail</label>
          <input type="text" name="thumbnail" id="thumbnail">
    
          <label for="price">Prezzo</label>
          <input type="text" name="price" id="price">
          @if ($errors->has('price'))
          <span class="text-danger">Il campo è obbligatorio e deve essere un numero compreso tra 0 e 99.99</span>
          @endif
    
          <label for="series">Serie</label>
          <input type="text" name="series" id="series">
    
          <label for="sale_date">Data (YYYY-MM-DD)</label>
          <input type="text" name="sale_date" id="sale_date">
          @if ($errors->has('sale_date'))
          <span class="text-danger">Il campo deve essere una data.</span>
          @endif
    
          <label for="type">Tipo</label>
          <input type="text" name="type" id="type">
    
          <button type="submit" class="btn btn-primary" >Invia</button>
          <button type="reset" class="btn btn-secondary" >Reset</button>

        </form>
    
        

      </div>
    </div>
  </div>
@endsection