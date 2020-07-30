@extends('home')
@section('dash_content')
<h1>Add New Blog </h1>
<form method="POST" action="add" enctype="multipart/form-data">
    @csrf
        @if(Auth::user()->role == "admin")
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" class="form-control" name="name" placeholder="Your name" required>
            </div>
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
            </div>
        @endif
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
        </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control-file" name="image" id="image" required>
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection