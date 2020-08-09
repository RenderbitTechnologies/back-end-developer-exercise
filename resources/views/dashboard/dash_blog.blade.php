@extends('home')
@section('dash_content')
<h1>Blog Page <a href="add_blog"><button style="float:right;" class="btn btn-warning">Add New Blog</button></a></h1>
<!-- for admin -->
@if(Auth::user()->role == "admin")
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Content</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $blog)
        <tr>
            <th scope="row">{{$blog->id}}</th>
            <td>{{$blog->name}}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->email}}</td>
            <td><img src="/images/{{$blog->image}}" style="height:100px;width:100px;" /></td>
            <td>{{$blog->content}}</td>
            <td><a href="/update_status/{{$blog->id}}" style="text-decoration:none;">{{$blog->status}}</a></td>
            <td> <a href="delete_blog/{{$blog->id}}" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;<i
                        class='fa fa-trash'></a></td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@if(Auth::user()->role == "user")
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Email</th>
            <th scope="col">Image</th>
            <th scope="col">Content</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $blog)

        @if(Auth::user()->name == $blog->name)
        <tr>
            <th scope="row">{{$blog->id}}</th>
            <td>{{$blog->name}}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->email}}</td>
            <td><img src="/images/{{$blog->image}}" style="height:100px;width:100px;" /></td>
            <td>{{$blog->content}}</td>
            <td>{{$blog->status}}</td>
            <td> <a href="delete_blog/{{$blog->id}}" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;<i
                        class='fa fa-trash'></a></td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endif
@endsection