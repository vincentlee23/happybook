@extends('layouts.master')

@section('title', 'HappyBook - Details')

@section('content')
    <div style = "font-size:30px">Book Details</div><br>
    <p><b>Title:</b> {{$data->title}}</p>
    <p><b>Author:</b> {{$data->detail->author}}</p>
    <p><b>Publisher:</b> {{$data->detail->publisher}}</p>
    <p><b>Year:</b> {{$data->detail->year}}</p>
    <p><b>Description:</b></p>
    <p>{{$data->detail->description}}</p>
@endsection