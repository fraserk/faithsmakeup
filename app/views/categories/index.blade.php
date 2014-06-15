@extends('layouts.template')
	@section('content')
	@foreach(array_chunk($data->getCollection()->all() ,4) as $albums)
		<div class="row">

			@foreach($albums as $d)
			<div class="large-3 medium-3 columns thumb end">
			<div class="preview">
                <a href="{{URL::route('show.portfolio',$d->id)}}" class="th">
                
                    @if($d->thumbnail)
                    {{HTML::image('/uploads/thumbs/small/' .$d->thumbnail)}}
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
