@extends('layouts.app')

@section('content')



                <div class="card">
                    <h5 class="card-header">{{$post->title}}</h5>
                    <div class="card-body">
                      <h5 class="card-title">Created By: <strong>
                          <a href="/profile/{{$post->user->u_name}}">{{$post->user->name}}</a>
                         </strong>
                       </h5>
                      <br>
                    <img src="/storage/cover_img/{{$post->cover_img}}" class="card-img-top img-thumbnail rounded mx-auto d-block" alt="JBlog">
                      
                      <p class="card-text mt-4"><strong>{!!$post->body!!}</strong></p>
                    </div>
                    <div class="card-footer text-muted">
                        <p class="card-text d-md-inline">Written On: {{$post->created_at}}</p>
                            <p class="card-text float-md-right">Updated On: {{$post->updated_at}}</p>
                    </div>
                </div>

                @if (!Auth::guest())
                  @if (Auth::user()->id == $post->user_id)
                        
                    <div class="my-4 mx-1">
                        <a class="btn btn-warning " href="/admin/{{$post->id}}/edit">Edit</a>

                    <form class="d-inline" action="admin/{id}/delete" method="POST">
                        {{csrf_field()}}
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger  float-right">Delete</button>
                    </form>
                    </div>
                    
                  @endif
                @endif
@endsection
