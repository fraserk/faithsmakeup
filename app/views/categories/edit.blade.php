@extends('layouts.template')
	@section('content')
       <h2>Create Your Portfolio Albums</h2>

       @if ($errors->any())
       
            {{ implode('', $errors->all('<div data-alert class="alert-box warning">:message</div>')) }}
        
    @endif
<div class="row">
  <div class="large-12 columns">
       {{Form::model($data,['files'=>true,'route'=>['update.album',$data->id],'method'=>'PUT'])}}
              @include('static._albumform')
       {{Form::close()}}
     </div>
    <div class="large-12 columns">
      <h1>OR</h1>

       {{Form::open(['route'=>['destroy.album',$data->id],'method'=>'DELETE'])}}
                {{Form::submit('Delete this Album',['class'=>'button tiny radius alert'])}}
       {{Form::close()}}
 </div>
 </div>



	@stop