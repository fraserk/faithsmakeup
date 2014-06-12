@extends('layouts.template')
	@section('content')

	<ul class="example-orbit" data-orbit>
	@foreach($images as $d)
	  <li>

	  	{{HTML::image('uploads/' .$d->category_id .'/' .$d->image_path,null,['alt'=>'slide' .$d->id])}}
	    <div class="orbit-caption">
	      {{$d->note}}
	  </li>
	 @endforeach
  
</ul>

	@stop