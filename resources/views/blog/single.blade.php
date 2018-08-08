@extends('main')

@section('title', "| $post->title")

@section('content')

	
	<div class="row">
		<div id='comment-form' class='col-md-8 col-md-offset-2'>
			<h1>{{ $post->title }}</h1>
			<hr>
			<p>{{ $post->body }}</p>
			<hr>
			
					@foreach($post->comments as $comment)
						<div class='comment'>
							<p><strong> Name</strong> :{{  $comment ->name }}</p>
							<p><strong>	Comment :</strong> <br/> {{ $comment->comment }} </p><br>
						</div>
					@endforeach
			
			{{ Form::open(['route'=>['comments.store',$post->id],'method'=>'POST']) }}
				<div class='row'>
						<div class='col-md-6'>
								{{ Form::label('name',"Name:") }}
								{{ Form::text('name',null,['class'=>'form-control']) }}
						</div>
						<div class='col-md-6'>
								{{ Form::label('email','Email:') }}
								{{ Form::text('email',null,['class'=>'form-control']) }}
						</div>
						<div class='col-md-12'>
								{{ Form::label('comment','Comments:') }}
								{{ Form::textarea('comment',null,['class'=>'form-control','rows'=>'5']) }}

								{{ Form::submit('Add comment',['class'=>'btn btn-success  btn-block']) }}
								<hr>

						</div>

				</div>
			{{ Form::close() }}
		</div>
	</div>

@endsection