@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1 class="text-center">
    Comic 
</h1>

<div class="text-center">
    <a href="{{route('dcComics.index')}}" class="btn btn-primary">
        Vai ai Comics
      </a>
</div>

@endsection
