@extends('layouts.template')
	@section('content')
       <h2>Create Your Portfolio Albums</h2>
       {{Form::open(['route'=>'store.album'])}}
              @include('static._albumform')
       {{Form::close()}}
       <hr />
 @foreach(array_chunk($data->getCollection()->all() ,4) as $albums)
              <div class="row">

                     @foreach($albums as $d)
                     <div class="large-3 medium-3 columns thumb end">
                     <div class="preview">
                <a href="{{URL::route('imageupload',$d->id)}}" class="th">{{HTML::image('uploads/' .$d->id .'/' .$d->portfolio[0]->thumb_path)}}</a>
                            <span class="description"><small>{{$d->name}} [edit]</small></span>
                     </div>
              </div>
                     @endforeach
                     

                            
                     
              </div>
       @endforeach



	@stop