@extends('layouts.app')

@section('content')
  <div class="container">
  <a href="/lsapp/public/posts" class="btn btn-primary">Go Back</a>
  <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
  

  
       
                <div class="card">
                    <h1> {{$post->title}}</h1>
                 <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                 <h3> {!!$post->body!!}</h3>
                 <hr>
                 <br>
                 @if (!Auth::guest())

                 @if (Auth::user()->id == $post->user_id)
                     
                 
                     
                 
                 </div>
                 <br>
                 <a href="/lsapp/public/posts/{{$post->id}}/edit"   class=" btn btn-success">Edit</a>
                    
                 {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST', 'class'=>'float-right'])!!}
                          {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}

                 {!!Form::close()!!}
                 @endif
                 @endif
                
                
           


        
        
   
  </div>
        
   @endsection