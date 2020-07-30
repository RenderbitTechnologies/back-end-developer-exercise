@extends('layouts.app')

@section('content')
    <h1>Welcome to Laravel training Services Section</h1>
    <h3>{{$title}}</h3>
    @if (count($services)>0)
        <ul>
            @foreach ($services  as $service)
                <li>{{$service}}</li>
                
            @endforeach


        </ul>
        
    @endif
        
@endsection
    