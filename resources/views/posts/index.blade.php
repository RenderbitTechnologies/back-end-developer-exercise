@extends('main')

@section('title', '|All posts ')

@section('content')

	<div class='row'>
		<div class='col-md-10'>
			<h1> All posts </h1>
		</div>

		<div class='col-md-2'>
			<a href='{{ route('posts.create') }}' class='btn btn-lg btn-block btn-primary '>Create New post</a>
		</div>
		<div class='col-md-12'><hr></div>
		<hr>
	</div>
	<hr>
	<div class='row'>
		<div class='col-md-10'>
		<table class="table table-striped">
  			<thead>
  				<th>Id</th><th>Title</th><th>Body</th><th>Created At</th>
  			</thead>
  			<tbody>
  				@foreach($posts as $post)
  					<tr>
  						<th>{{ $post-> id }}</th>
  						<td>{{ $post-> title }}</td>
  						<td>{{ substr( $post->body,0,50) }}{{ strlen($post->body)>50 ? "..." : "" }}</td>
  						<td>{{ date('M j ,Y ',strtotime($post->created_at)) }}</td>
  						<td><a href='{{ route('posts.show',$post->id) }}' class='btn btn-default btn-sm'>View</a><a href='{{ route('posts.edit',$post->id) }}' class='btn btn-default btn-sm'>Edit</a></td>
  					</tr>
  				@endforeach
  			</tbody>
		</table>
			<div class='text=center'>
				{!! $posts->links(); !!}
			</div>
		</div>
	</div>
@stop