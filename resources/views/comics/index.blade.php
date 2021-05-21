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
                <a href="{{route('comics.edit', ['comic' => $comic->id])}}">-Edit</a>
            </a>
                <form action="{{route('comics.destroy',['comic'=>$comic->id])}}" method="post">
                    @csrf 
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
        </div>
    @endforeach 
    <a href="{{route('comics.create')}}">CREA FUMETTO</a> 
  </main>
@endsection