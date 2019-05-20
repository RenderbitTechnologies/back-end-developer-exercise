@extends('layouts.app')

@section('content')
  <div class="container">
  <a href="/lsapp/public/posts" class="btn btn-primary">Go Back</a>
  <h1>Create Post</h1>
  <hr>

        {{ Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}

                    
                </div>

                <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' =>'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Blog Text'])}}

                    
                </div>
                <div class="form-group">
                  {{Form::file('cover-image')}}
                </div>

                {{Form::submit('submit',['class' => 'btn btn-primary'])}}
                
        {{ Form::close() }}
       
              
                
           


        
        
   
  </div>
        
   @endsection