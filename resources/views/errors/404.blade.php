@extends('layouts.main')


@section('content')

<div class="container text-center">
    <h1>Error 404</h1>
    <h2>Page not found:</h2>
    <h4 class="mb-4">{{ $exception->getMessage() }}</h4>

    <a href="{{route('comics.index')}}" class="btn btn-warning">Torna alla Lista</a>
</div>

@endsection