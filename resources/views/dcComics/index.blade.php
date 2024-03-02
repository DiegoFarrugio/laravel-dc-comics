@extends('layouts.app')

@section('page-title', 'DcComic')

@section('main-content')
<h1>
    Dc Comics Index
</h1>

<div class="row mt-3 ">
  <div class="col">
    <div>
      <a href="{{ route('dcComics.create')}}" class="btn btn-primary w-100 ">
      Aggiungi
    </a>
    </div>
    <table class="table mt-3 ">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titolo</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Serie</th>
          <th scope="col">Vendita</th>
          <th scope="col">Tipo</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dcComics as $comic)
          <tr>
            <th scope="row">{{ $comic->id }}</th>
            <td>{{ $comic->title }}</td>
            <td>${{$comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
            <td>
      
            <a href="{{ route('dcComics.show', ['dcComic' => $comic->id]) }}" class="btn btn-primary">
              Show
            </a>
            <a href="{{ route('dcComics.edit', ['dcComic' => $comic->id]) }}" class="btn btn-secondary">
              Modifica
            </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection