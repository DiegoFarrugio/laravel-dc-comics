@extends('layouts.app')

@section('page-title', 'edit DcComic')

@section('main-content')
<h1>
    Dc Comics Index
</h1>

<div class="row mb-3 ">
  <div class="col"
  >
    <form action="{{route('dcComics.update', ['dcComic' => $dcComic->id])}}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="title" class="form-label">Title (Campo Obbligatorio)</label>
        <input
          value="{{$dcComic->title}}"
          type="text" class="form-control" id="title" name="title" placeholder="Inserisci titolo...">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci descrizione...">{{$dcComic->description}}</textarea>
      </div>

      <div class="mb-3">
        <label for="thumb" class="form-label">Thumb (Campo Obbligatorio)</label>
        <input
          value="{{$dcComic->thumb}}"
          class="form-control" type="text" id="thumb" name="thumb" placeholder="Inserisci foto...">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price (Campo Obbligatorio)</label>
        <input
          value="{{$dcComic->price}}"
          type="number" class="form-control" id="price" name="price" placeholder="Inserisci prezzo...">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input
          value="{{$dcComic->series}}"
          type="text" class="form-control" id="series" name="series" placeholder="Inserisci genere...">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale Date</label>
        <input
          value="{{$dcComic->sale_date}}"
          type="text" class="form-control" id="sale_date" name="sale_date">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input
          value="{{$dcComic->type}}"
          type="text" class="form-control" id="type" name="type">
      </div>

      <div>
        <button class="btn btn-warning w-100">+ MODIFICA</button>
      </div>
    </form>
  </div>
</div>

@endsection