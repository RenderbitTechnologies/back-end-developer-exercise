@extends('layouts.app')

@section('content')

       <div class="jumbotron text-center">
           
        <h1 class="display-4 text-monospace text-uppercase">{{$finduser->name}}'s Post</h1>
         
       </div>

        @if (count($posts)>0)
            @foreach ($posts as $post)
           
            <div class="card m-3" >
                    <div class="card-header">
                            <h3><strong>{{Str_limit($post->title)}}</strong></h3>
                    </div>
             
                <div class="row no-gutters">
                    <div class="col-md-1">
                      <img src="/storage/cover_img/{{$post->cover_img}}" class="card-img img-thumbnail rounded" alt="JBlog">
                    </div>
                    <div class="col-md-11">
                        <div class="card-body" style="color:rgba(0, 0, 0, 0.5);">
                            
                            <h5 class="card-title">{!!Str_limit($post->body)!!}</h5>
                            <br>
                            <a class="btn btn-secondary btn-sm" href="/profile/{{$post->user->u_name}}/{{$post->id}}">Read More</a>
                            <hr>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="card-footer text-muted">
                        <small class="text-muted float-left">Created By: 
                            <strong>
                              <a href="profile/{{$post->user->u_name}}">{{$post->user->name}}</a>
                            </strong>
                        </small>
                        <small class="text-muted float-right">{{$post->created_at}}</small>
                </div>
            </div>
       
            @endforeach
            {{$posts->links()}}
        @else
            <p class="text-center font-weight-bold text-danger">Ther is no post</p>
        @endif


        
 @endsection
