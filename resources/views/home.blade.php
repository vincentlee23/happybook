@extends('layouts.master')
<link rel="stylesheet" href="{{asset('front/css/home.css')}}">

@section('title', 'HappyBook - Home')

@section('content')
    <div class="book-list-title">
        <p>Book List</p>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col" style="width: 60%">Title</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $d)
            <tr>
                <td><a href="/details/{{$d->id}}" class="book-title-link">{{$d->title}}</a></td>
                <td>{{$d->detail->author}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$data->links()}}
@endsection