@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Lista de Libros</h1>
    <div class="row">
        @foreach($books as $book)
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book['title'] }}</h5>
                        <p class="card-text"><strong>Autor:</strong> {{ $book['author'] }}</p>
                        <p class="card-text"><strong>Editorial:</strong> {{ $book['publisher'] }}</p>
                        <p class="card-text"><small class="text-muted">Edición: {{ $book['edition'] }} | {{ $book['copyright'] }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
