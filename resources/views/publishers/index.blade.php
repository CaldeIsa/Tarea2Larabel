@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Lista de Editoriales</h1>
    <div class="row">
        @foreach($publishers as $publisher)
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $publisher['publisher'] }}</h5>
                        <p class="card-text"><strong>País:</strong> {{ $publisher['country'] }}</p>
                        <p class="card-text"><strong>Fundada en:</strong> {{ $publisher['founded'] }}</p>
                        <p class="card-text"><strong>Género:</strong> {{ $publisher['genre'] }}</p>
                        <p class="card-text"><strong>Libros publicados:</strong></p>
                        <ul>
                            @foreach($publisher['books'] as $book)
                                <li>{{ $book }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
