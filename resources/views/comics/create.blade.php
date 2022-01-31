@extends('layouts.main')

@section('content')
  <div class="container ">
    <div class="row">
      <div class="col-8 offset-2">
        <h2>Inserisci un nuovo fumetto</h2>
        <form action="{{route('comics.store')}}" method="POST" class="py-3">
          @csrf
          <label for="title">Titolo</label>
          <input type="text" name="title" id="title"
          class="@error('title')
           form-control is-invalid
          @enderror"
          value="{{old('title')}}">
          @error('title')
            <span class="text-danger"> {{$message}}</span>
          @enderror
    
          <label for="description">Descrizione</label>
          <textarea type="text" name="description" id="description"
          value="{{old('description')}}"></textarea>
          
          <label for="thumbnail">URL Thumbnail</label>
          <input type="text" name="thumbnail" id="thumbnail"
          value="{{old('thumbnail')}}">
    
          <label for="price">Prezzo</label>
          <input type="text" name="price" id="price"
          class="@error('price')
          form-control is-invalid
          @enderror"
          value="{{old('price')}}">
          @error('price')
            <span class="text-danger">Il campo è obbligatorio e deve essere un numero compreso tra 0 e 99.99</span>
          @enderror

    
          <label for="series">Serie</label>
          <input type="text" name="series" id="series"
          value="{{old('series')}}">
    
          <label for="sale_date">Data (YYYY-MM-DD)</label>
          <input type="text" name="sale_date" id="sale_date" 
          class="@error('sale_date')
          form-control is-invalid
          @enderror"
          value="{{old('sale_date')}}">
          @error('sale_date')
            <span class="text-danger">Il campo deve essere una data.</span>
          @enderror

    
          <label for="type">Tipo</label>
          <input type="text" name="type" id="type"
          value="{{old('type')}}">
    
          <button type="submit" class="btn btn-primary" >Invia</button>
          <button type="reset" class="btn btn-secondary" >Reset</button>

        </form>
    
        

      </div>
    </div>
  </div>
@endsection