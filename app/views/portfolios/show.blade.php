@extends('layouts.template')
	@section('content')

	@if(!$images->isEmpty())
		No Photo uploaded as yet..
	@else

	 <ul class="example-orbit" data-orbit>
	@foreach($images as $d)
	  <li>

	  	{{HTML::image('uploads/' .$d->image_path,null,['alt'=>'slide' .$d->id])}}
	    <div class="orbit-caption">
	      {{$d->note}}
	  </li>
	 @endforeach
  
	</ul>

	@endif

	

	@stop

