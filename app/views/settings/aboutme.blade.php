@extends('layouts.admin')
	@section('content')
		<h4>Edit About Me Section..</h4>
			{{Form::model($data,['route'=>['update.aboutme'],'method'=>'put'])}}
				{{Form::textarea('about_me',null,['class'=>'detail'])}}
				{{Form::hidden('id')}}
				<hr />{{Form::submit('Save' , ['class'=>'tiny button radius'])}}
			{{Form::close()}}
	@stop