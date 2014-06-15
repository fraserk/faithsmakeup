@extends('layouts.template')
	@section('content')
	<h2>Photo album {{$data->name}}</h2>

		{{Form::open(['files'=>true,'route'=>'store.image'])}}
		@if ($errors->any())
		   
		        {{ implode('', $errors->all('<div data-alert class="alert-box warning">:message</div>')) }}
		    
		@endif
		<div class="row">
			<div class="large-4">
			@include('static._uploadform')
				{{Form::submit('Upload',['class'=>'button radius tiny'])}}
			</div>
		</div>	
		{{Form::close()}}


		<hr />
		<h2>Photos currently in this album.</h2>
	 @foreach(array_chunk($images->getcollection()->all() ,4) as $album)
              <div class="row">

                     @foreach($album as $d)                    	
                     <div class="large-3 medium-3 columns thumb end">
                     	<small>Set as album cover.</small>
                <a href="{{URL::route('show.portfolio',$d->category_id)}}" class="th">
                	
                	{{HTML::image('uploads/' .$data->id .'/' .$d->image_path)}}</a>
                            
				 				{{Form::open(['route'=>['portfolio.destroy',$d->id],'method'=>'DELETE'])}}
				 				{{Form::submit('Delete',['class'=>'button tiny alert'])}}
				 				{{Form::close()}}


                     </div>
             
                     @endforeach
                     

                            
                     
              </div>
       @endforeach
       	{{$images->links()}}
		@stop