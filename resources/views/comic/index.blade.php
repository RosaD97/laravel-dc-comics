@extends('layout.app')

@section('title')
<h1 class="container text-center my-4 text-light">Comics</h1>
@endsection


@section('page.main')
<div class="container text-center my-5">
  <a href="{{ route('comics.create')}}" class="btn my_btn btn-light">Insert a new comic</a>

</div>

<div class="container d-flex flex-wrap gap-4 justify-content-center">
        @foreach ($comics as $comic)
            <div class="card ms_card">
                <img src="{{ $comic->thumb }}" class="ms_thumb " alt="">
                <div class="card-body justify-content-end d-flex flex-column">
                  <h5 class="card-title mb-4">{{ $comic->title }}</h5>
                  <div>Price: {{ $comic->price }}</div>
                  <div>Series: {{ $comic->series }}</div>

                  {{-- Rotta per la views show --}}
                  <a href="{{ route('comics.show', $comic->id )}}" class="btn my_btn btn-light mt-4 justify-content-center d-flex">Vedi dettagli</a>
                  {{-- Rotta per la views edit --}}
                  <a href="{{ route('comics.edit', $comic->id )}}" class="btn my_btn btn-light mt-4 justify-content-center d-flex">Modifica</a>

                  <form class="text-center my-2" action="{{ route('comics.destroy', $comic->id )}}" method="POST">
                    @csrf
                      {{-- Metodo DELETE --}}
                      @method('DELETE')
                    <button type="submit" class="btn my_btn_delete btn-light">delete</button>
                  </form>
                </div>
              </div>
        @endforeach
</div>
@endsection