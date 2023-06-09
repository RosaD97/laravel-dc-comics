@extends('layout.app')

@section('title')
<div class="container">
  <h1 class="text-light my-4">Edit comic {{ $comic->title }} </h1>
</div>
@endsection

@section('page.main')
<div class="container ms_create">
  <div>
      <a href="{{ route('comics.index')}}" class="btn btn-primary my-4 my_btn btn-light">Back</a>
  </div>
  <div>
      <form action="{{ route('comics.update', $comic->id)}}" method="POST">
          @csrf

          {{-- Metodo PUT --}}
          @method('PUT')

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" >
          </div>
          <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">Img</label>
              <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
              <label for="sale_date" class="form-label">Sale date</label>
              <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
              <label for="artists" class="form-label">Artists</label>
              <input type="text" class="form-control" id="artists" name="artists" value="{{ $comic->artists }}">
            </div>
            <div class="mb-3">
              <label for="writers" class="form-label">Writers</label>
              <input type="text" class="form-control" id="writers" name="writers" value="{{ $comic->writers }}">
            </div>
          <button type="submit" class="btn my_btn btn-light mt-3">Submit</button>
        </form>
  </div>
</div>

@endsection