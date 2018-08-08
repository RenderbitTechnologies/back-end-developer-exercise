@extends('main')

@section('title','| create new post')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}
	 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=vzyebxsrgy8shtg2tybjj1zfdo8hkmb65oqncz0q7xqbnhu9"></script>

	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'link code',
			menubar: false
		});
	</script>

@endsection

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		<h1>Create New Post</h1>
		<hr>
		{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}
		   		
    			{{ Form::label('title','Title:') }}
    			{{ Form::text('title',null,array('class'=>'form-control','required'=>'','maxlength'=>'255')) }}

    			{{ Form::label('slug','Slug:') }}
    			{{ Form::text('slug',null,array('class'=>'form-control','required'=>'','minlength'=>'5','maxlength'=>'255')) }}
    			
    			{{ Form::label('featured_img', 'Upload a Featured Image') }}
				{{ Form::file('featured_img') }}

		 		{{ Form::label('body','Post Body :') }}
		 		{{ Form::textarea('body',null,array('class'=>'form-control','required'=>'')) }}
		 		
		 		{{ Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block')) }}
		 	{!! Form::close() !!}

		 <hr>

		</div>
	</div>
		
@section('scripts')
	{!! Html:: script('js/parsley.min.js') !!}
@endsection

@endsection