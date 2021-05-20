@extends('layouts.app')

@section('main')
  <main>
    @foreach($comics as $comic)
        <div class="card">
            <a href="{{route('comics.show', ['comic' => $comic->id])}}">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <h4>{{$comic->title}}</h4>
                <h5>{{$comic->price}}</h5>
                <h5>{{$comic->series}}</h5>
            </a>
        </div>
    @endforeach  
  </main>
@endsection