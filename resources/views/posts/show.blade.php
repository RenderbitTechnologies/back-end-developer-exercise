@extends('main')

@section('title',' | View Post')

@section('content')

<div class='row'>
	<div class='col-md-8'>
	<h1>{!! $post->title !!}</h1>
	<hr>
	<p class="lead"> {{ $post->body }} </p>
	</div>

	<div class="col-md-4">
		<div class='well'>
				
				<dl class="dl-horizontal">
  					<dt>Created at:</dt>
  					<dd>{{ date('M j, Y h:ia ',strtotime($post->created_at))}}</dd>
				</dl>
				<hr>
				<dl class="dl-horizontal">
  					<dt>Updated at:</dt>
  					<dd>{{ date('M j, Y h:ia',strtotime($post->updated_at)) }}</dd>
				</dl>
				<div class='row'>
					<div class='col-sm-6'>
						{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=> "btn btn-primary btn-block")) !!}
						
					</div>
					<div class='col-sm-6'>
						{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE']) !!}

						{!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}
						
						{!! Form::close() !!}
					</div>
				</div>
				<hr>
				<div class='row'>
					<div class='col-md-12'>
						{!! Html::linkRoute('posts.index','< Sell all posts',[],array('class'=> "btn btn-default btn-block")) !!}	 
					</div>
				</div>

		</div>
	</div>
</div>
@endsection