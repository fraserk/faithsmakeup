@extends('layouts.template')
	@section('content')
		@if($data->count())

			@foreach($data as $d)
				<h2>{{link_to_route('show.blog',$d->title,$d->id)}}</h2>
				Posted on. {{$d->created_at->toFormattedDateString()}}
				<p>{{Str::words($d->body,'75','...')}}</p>

			@endforeach

			{{$data->links()}}

		@else
			<small>No Blog post as yet</small>
		@endif
	@stop

	