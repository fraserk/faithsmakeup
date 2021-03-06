@extends('layouts.template')
	@section('content')
	@foreach(array_chunk($data->getCollection()->all() ,4) as $albums)
		<div class="row">

			@foreach($albums as $d)
			<div class="large-3 medium-3 columns thumb end">
			<div class="preview">
                <a href="{{URL::route('show.portfolio',$d->id)}}" class="th">
                
                    @if($d->thumbnail)
                    <img src="{{Cloudy::show($d->thumbnail, array('width' => 150, 'height' => 150, 'crop' => 'fit', 'radius' => 0));}}">
                    @else
                      {{HTML::image('img/noimg.png')}}
                    @endif
                </a>
				<span class="description"><small>{{$d->name}} </small></span>
			</div>
		</div>
			@endforeach
			

				
			
		</div>
	@endforeach
		
		

	@stop
