@extends('layouts.template')
	@section('content')
       <h2>Create Your Portfolio Albums</h2>

       @if ($errors->any())
       
            {{ implode('', $errors->all('<div data-alert class="alert-box warning">:message</div>')) }}
        
    @endif
       {{Form::open(['files'=>true,'route'=>'store.album'])}}
              @include('static._albumform')
       {{Form::close()}}
       <hr />
 @foreach(array_chunk($data->getCollection()->all() ,4) as $albums)
              <div class="row">

                     @foreach($albums as $d)
                     <div class="large-3 medium-3 columns thumb end">
                     <div class="preview">
                      
                <a href="{{URL::route('imageupload',$d->id)}}" class="th">
                    @if($d->thumbnail)
                    {{HTML::image('uploads/' .$d->id .'/' .$d->thumbnail)}}
                    @else
                      {{HTML::image('img/noimg.png')}}
                    @endif
                  


                </a>
                            <span class="description"><small>{{$d->name}} [edit]</small></span>
                    
                     </div>
              </div>
                     @endforeach
                     

                            
                     
              </div>
       @endforeach



	@stop