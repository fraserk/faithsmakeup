@extends('layouts.admin')
	@section('content')

	<h3>Create a new blog post</h3>

	{{Form::open(['route'=>'store.blog'])}}
		@include('blogs.blogform')
		<hr />
		{{Form::submit('Post Blog',['class'=>'button radius'])}}

	{{Form::close()}}

	@stop



	@section('sidebar')
		@if($data->count())
		<h5 class="subheader">Blog Posts</h5>
			<ul class='square'>
			@foreach ($data as $d)
				<li>{{$d->title}}[{{link_to_route('edit.blog','Edit',$d->id)}}]</li>
			@endforeach
			</ul>
		{{$data->links()}}
		@else


			<small>No Blog post yet..</small>
		@endif
	@stop