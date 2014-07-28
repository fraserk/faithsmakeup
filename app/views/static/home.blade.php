@extends('layouts.template')
	@section('content')
		@if($images->isEmpty())
		No Photo uploaded as yet..
	@else
<div class="row">
    <div class="large-12 columns">
	 <ul class="example-orbit" data-orbit>
	@foreach($images as $d)
	  <li>
          <img src="{{Cloudy::show($d->name, array('width' =>1200, 'height' => 733, 'crop' => 'fit', 'radius' => 0));}}">
	  	
	  </li>
	 @endforeach
  
	</ul>

	@endif


    </div>

	@stop