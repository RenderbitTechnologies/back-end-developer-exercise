@extends('home')
@section('dash_content')
<h1>Comments!!</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Comment</th>
            <th scope="col">User</th>
            <th scope="col">Blog</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @if(Auth::user()->role == "admin")
            @foreach($data as $comment)
                <tr>
                    <td>{{$comment->comment}}</td>
                    <td>{{$comment->name}}</td>
                    <td>{{$comment->blog_id}}</td>
                    <td> <a href="delete_comment/{{$comment->id}}" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class='fa fa-trash'></a></td>
                </tr>
            @endforeach
        @endif
        @if(Auth::user()->role == "user")
            @foreach($data as $comment)
                <tr>
                    <td>{{$comment->comment}}</td>
                    <td>{{$comment->name}}</td>
                    <td>{{$comment->blog_id}}</td>
                    <td> <a href="delete_comment/{{$comment->id}}" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;<i
                                class='fa fa-trash'></a></td>
                </tr>
            @endforeach
        @endif
@endsection