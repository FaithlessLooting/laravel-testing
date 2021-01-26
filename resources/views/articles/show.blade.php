@extends('layout')
@section('content')

<h1>Showing: {{ $article->topic }}</h1>
        <h2>{{ $article->name }}</h2>
        <p>
            <strong>Category:</strong> {{ $article->category }}<br>
            <strong>Description:</strong> {{ $article->description }}
        </p>
@endsection
