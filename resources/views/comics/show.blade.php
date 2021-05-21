@extends('layouts.app')

@section('main')
<div class="edit">
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <h4>{{$comic->title}}</h4>
    <h5>{{$comic->price}}</h5>
    <h5>{{$comic->series}}</h5>
    <h5 id="description">{{$comic->description}}</h5>
    <h5>{{$comic->sale_date}}</h5>
    <h5>{{$comic->type}}</h5>
    <a href="{{route('comics.edit', ['comic' => $comic->id])}}">-Edit Comic</a>
</div>
@endsection