@extends('layouts.admin')
	@section('sidebar')
       <h4>Upload Homepage Image</h4>

       @if ($errors->any())
       
            {{ implode('', $errors->all('<div data-alert class="alert-box warning">:message</div>')) }}
        
    @endif
       {{Form::open(['files'=>true,'route'=>'dohomepageimage'])}}
              @include('static._albumform')
       {{Form::close()}}
    @stop
       @section('content')
 
                  
       @if($data->count())
          @foreach($data as $d )
           <ul class="no-bullet">
              <li><img src="{{Cloudy::show($d->name, array('width' => 150, 'height' => 150, 'crop' => 'fit', 'radius' => 0));}}">
                
               </li> 
              {{Form::open(['route'=>'delhomeimage'])}}
                {{Form::hidden('id',$d->id)}}
                {{Form::submit('Delete',['class'=>'button tiny alert'])}}
              {{Form::close()}}
           </ul> 

          @endforeach

      @else
      <small>No image as yet.  Upload a new one to the right..</small>
       @endif
       

@stop

                
                    
                     

                            
           