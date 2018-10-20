@extends('layouts.app')

@section('content')
    <br><br><br><br><br>
    <h1>Post !!</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="container">
                <div class="alert alert-success">
                    <h3> <a href=" {{url('/posts')}}/{{$post->id}}">{{$post->title}}</a> </h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found</p>
    @endif
@endsection
