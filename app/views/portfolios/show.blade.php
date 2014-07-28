@extends('layouts.template')
	@section('content')

	@if($images->isEmpty())
		No Photo uploaded as yet..
	@else

	 <ul class="example-orbit" data-orbit>
	@foreach($images as $d)
	  <li>
        <img src="{{Cloudy::show($d->image_path, array('width' => 950, 'height' => 700, 'crop' => 'fit', 'radius' => 0));}}">
  
	    <div class="orbit-caption">
	      {{$d->note}}
        </div>
	  </li>
	 @endforeach
  
	</ul>

	@endif

	

	@stop

