@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>this is laravel application from scratch</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">login</a> <a class="btn btn-success btn-lg" href="/regestir" role="button">Regestir </a> </p>
    </div>
@endsection
