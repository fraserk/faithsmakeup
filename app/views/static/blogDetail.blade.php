@extends('layouts.template')
	@section('content')
		@if($data->count())

				<h2>{{$data->title}}</h2>
				Posted on.{{$data->created_at->toFormattedDateString()}}
				<p>{{$data->body}}</p>

		@else
			<small>invalid blog post..</small>
		@endif
	@stop

	