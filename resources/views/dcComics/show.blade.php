@extends('layouts.app')

@section('page-title', $dcComic->title )

@section('main-content')
<h1>
    Dc Comics Index
</h1>

<div class="row">
  <div class="col">
    <div>
      <a href="{{route('dcComics.index')}}" class="btn btn-primary ">
      Torna all'index
    </a>
    </div>
    <div class="card">
      <img src="{{$dcComic->thumb}}" alt="">
      <div class="card-body">
        <ul>
          <li>
            Descrizione: {{$dcComic->description}}
          </li>
          <li>
            Prezzo: € {{$dcComic->price}}
          </li>
          <li>
            Serie: {{$dcComic->series}}
          </li>
          <li>
            Uscita: {{$dcComic->sale_date}}
          </li>
          <li>
            Genere: {{$dcComic->type}}
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection