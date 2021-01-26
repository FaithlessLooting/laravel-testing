@extends('layout')
@section('content')

<h1>Edit {{ $article->topic }}</h1>


<form action="{{ route('articles.update',$article->id) }}" method="POST">
@csrf
@method('PATCH')
  <div class="form-group">
    <label for="topic">Topic title</label>
    <input type="text" class="form-control" value="{{ $article->topic }}" placeholder="Enter Topic" name ="topic">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3" name="description">{{ $article->description }}</textarea>
  </div>
<div class="form-group">
    <label for="categorie">Category</label>
    <input type="text" class="form-control" value="{{ $article->category }}" placeholder="Enter Category" name ="category">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
