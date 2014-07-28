@extends('layouts.admin')
	@section('content')
		<h4>Edit Service Section..</h4>
			{{Form::model($data,['route'=>['update.service'],'method'=>'put'])}}
				{{Form::textarea('service',null,['class'=>'detail'])}}
				{{Form::hidden('id')}}
				<hr />{{Form::submit('Save' , ['class'=>'tiny button radius'])}}
			{{Form::close()}}
	@stop