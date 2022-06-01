@extends('layouts.master')

<link rel="stylesheet" href="{{asset('front/css/home.css')}}">

@section('title')
    HappyBook - {{$category->category}}
@endsection

@section('content')
    @if($category->id == 1)
        <div style = "font-size:30px">Education</div><br>
    @elseif($category->id == 2)
        <div style = "font-size:30px">Fiction</div><br>
    @elseif($category->id == 3)
        <div style = "font-size:30px">History</div><br>
    @elseif($category->id == 4)
        <div style = "font-size:30px">Kids</div><br>
    @elseif($category->id == 5)
        <div style = "font-size:30px">Romance</div><br>
    @endif

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
    
    @if($data->isEmpty())
    <?php echo 'No Data Available'?>
    @endif
    
    
@endsection

@if($category->id == 1)
    @section('active1', 'active')
@elseif($category->id == 2)
    @section('active2', 'active')
@elseif($category->id == 3)
    @section('active3', 'active')
@elseif($category->id == 4)
    @section('active4', 'active')
@elseif($category->id == 5)
    @section('active5', 'active')
@endif