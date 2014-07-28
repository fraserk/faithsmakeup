@extends('layouts.admin')
	@section('sidebar')
	<h2>Photo album: {{$data->name}}</h2>

		{{Form::open(['files'=>true,'route'=>'store.image'])}}
		@if ($errors->any())
		   
		        {{ implode('', $errors->all('<div data-alert class="alert-box warning">:message</div>')) }}
		    
		@endif
		
			@include('static._uploadform')
				{{Form::submit('Upload',['class'=>'button radius tiny'])}}
		
		{{Form::close()}}

@stop
@section('content')
		
	 @foreach(array_chunk($images->getcollection()->all() ,4) as $album)
              <div class="row">

                     @foreach($album as $d)                    	
                     <div class="large-3 medium-3 columns thumb end">
                     	
                <a href="{{URL::route('show.portfolio',$d->category_id)}}" class="th">
                	
                	
                    <img src="{{Cloudy::show($d->image_path, array('width' => 150, 'height' => 150, 'crop' => 'fit', 'radius' => 0));}}">
                </a>
                            
				 				{{Form::open(['route'=>['portfolio.destroy',$d->id],'method'=>'DELETE'])}}
				 				{{Form::submit('Delete',['class'=>'button tiny alert'])}}
				 				{{Form::close()}}


                     </div>
             
                     @endforeach
                     

                            
                     
              </div>
       @endforeach
       	{{$images->links()}}
		@stop