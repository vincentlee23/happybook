@extends('layouts.master')

<link rel="stylesheet" href="{{asset('front/css/details.css')}}">
@section('title', 'HappyBook - Details')

@section('content')
    <div style = "font-size:30px">Book Details</div><br>
    <div class="content-head">
        <div class="content-text">
            <p><b>Title:</b> {{$data->title}}</p>
            <p><b>Author:</b> {{$data->detail->author}}</p>
            <p><b>Publisher:</b> {{$data->detail->publisher}}</p>
            <p><b>Year:</b> {{$data->detail->year}}</p>
        </div>
        <div class="content-photo">
            <img src="{{$data->detail->photo}}" alt="">
        </div>
    </div>
    <p><b>Description:</b></p>
    <p>{{$data->detail->description}}</p>
@endsection