@extends('home')
@section('dash_content')
<h1>Profile Page</h1>
<form action="/update/{{Auth::user()->id}}" method="POST">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-12">
            <label>Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                value="{{Auth::user()->name}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label>Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                value="{{Auth::user()->email}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label>Username</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Username"
                value="{{Auth::user()->username}}">
        </div>
    </div>
    <input type="submit" name="update" value="Update" class="btn btn-primary">
</form>
@endsection