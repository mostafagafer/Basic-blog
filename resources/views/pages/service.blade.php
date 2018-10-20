@extends('layouts.app')

@section('content')
    <br><br>
    <h1>{{$data['title']}}</h1>
    @if(count($data['services'])>0)
<br><br>
        <ul class="list-group">
            @foreach($data['services'] as $service)
            <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>

    @endif
@endsection
