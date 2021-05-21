@extends('layouts.app')

@section('main')

    <div>
        <form action="{{route('comics.store')}}" method="post">
            @csrf 
            @method('POST')
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="description" placeholder="Description">
            <input type="text" name="thumb" placeholder="Thumb">
            <input type="text" name="price" placeholder="Price">
            <input type="text" name="series" placeholder="Series">
            <input type="text" name="sale_date" placeholder="Date">
            <input type="text" name="type" placeholder="Type">

            <input type="submit" value="SEND">
        </form>
    </div>

@endsection