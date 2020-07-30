@extends('home')
@section('dash_content')
@if(Auth::user()->role == "admin")
<h1>Queries...</h1>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Subject</th>
                <th scope="col">Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $msg)
            <tr>
                <th scope="row">{{$msg->id}}</th>
                <td>{{$msg->name}}</td>
                <td>{{$msg->subject}}</td>
                <td>{{$msg->message}}</td>
                <td> <a href="delete_msg/{{$msg->id}}" style="text-decoration:none;">&nbsp;&nbsp;&nbsp;&nbsp;<i
                            class='fa fa-trash'></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@else
<h1>Contact Us</h1>
<form action="contactus" method="POST">
    @csrf

    <div class="form-group col-md-12">
        <label>Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
    </div>
    <div class="form-group col-md-12">
        <label>Message</label>
        <textarea cols="30" rows="7" name="message" id="message" class="form-control" placeholder="Message"
            required></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg"> Send</button>
</form>
@endif
@endsection