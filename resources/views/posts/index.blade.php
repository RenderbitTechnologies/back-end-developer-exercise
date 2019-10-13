@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center text-bold">HELLO {{Auth::User()->name}}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  
                      <h1 class="text-success display-5">You are logged in!</h1>
                </div>

                <a class="btn btn-info" href="admin/create">Create Post</a>
            </div>


                

            @if (count($posts)>0)
            @foreach ($posts as $post)
           
            <div class="card m-3" >
                <div class="card-header">
                    <h3><strong>{{Str_limit($post->title)}}</strong></h3>
                </div>
                <div class="card-body">
                    <div class="row no-gutters">

                        <div class="col-md-2">
                            <img src="/storage/cover_img/{{$post->cover_img}}" class="card-img img-thumbnail rounded" alt="JBlog">
                        </div>

                        <div class="col-md-10 text-right">
                            <a class="btn btn-secondary m-3" href="/profile/{{$post->user->u_name}}/{{$post->id}}">Open Post</a>
                            <a class="btn btn-secondary m-3" href="/admin/{{$post->id}}/edit">Edit</a>
                            <form class="d-inline " action="/admin/{{$post->id}}/delete" method="POST">
                                    {{csrf_field()}}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger m-3 float-right">Delete</button>
                            </form>
                        </div>

                    </div>  
                </div>

                <div class="card-footer text-muted">
                        <p class="card-text"> 
                            <small class="text-muted float-right">{{$post->created_at}}</small>
                        </p>    
                </div>
               
          </div>
       
            @endforeach
           {{$posts->links()}}
        @else
            <p class="text-center font-weight-bold text-danger">Ther is no post. Create One.</p>
        @endif


        
        </div>
    </div>
</div>
@endsection
