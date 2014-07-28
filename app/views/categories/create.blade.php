@extends('layouts.admin')
	@section('sidebar')
       <h4>Create Your Portfolio Album</h4>

       @if ($errors->any())
       
            {{ implode('', $errors->all('<div data-alert class="alert-box warning">:message</div>')) }}
        
    @endif
       {{Form::open(['files'=>true,'route'=>'store.album'])}}
              @include('static._albumform')
       {{Form::close()}}
    @stop
       @section('content')
 @foreach(array_chunk($data->getCollection()->all() ,4) as $albums)
              <div class="row">

                     @foreach($albums as $d)
                     <div class="large-3 medium-3 columns thumb end">
                     <div class="preview">
                      
                <a href="{{URL::route('imageupload',$d->id)}}" class="th">
                    @if($d->thumbnail)
                    <img src="{{Cloudy::show($d->thumbnail, array('width' => 150, 'height' => 150, 'crop' => 'fit', 'radius' => 0));}}">
                    @else
                      {{HTML::image('img/noimg.png')}}
                    @endif
                  


                </a>
                            <span class="description"><small>{{$d->name}} [{{link_to_route('edit.album','Edit',$d->id)}}]</small></span>
                    
                     </div>
              </div>
                     @endforeach
                     

                            
                     
              </div>
       @endforeach



	@stop