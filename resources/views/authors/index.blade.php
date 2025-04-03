@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Lista de Autores</h1>
    <div class="row">
        @foreach($authors as $author)
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $author['author'] }}</h5>
                        <p class="card-text"><strong>Nacionalidad:</strong> {{ $author['nationality'] }}</p>
                        <p class="card-text"><strong>Año de Nacimiento:</strong> {{ $author['birth_year'] }}</p>
                        <p class="card-text"><strong>Campos:</strong> {{ $author['fields'] }}</p>
                        <p class="card-text"><strong>Libros:</strong></p>
                        <ul>
                            @foreach($author['books'] as $book)
                                <li>{{ $book }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
