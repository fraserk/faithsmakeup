@extends('layouts.admin')
	@section('content')
		<h4>Edit FAQ Section..</h4>
			{{Form::model($data,['route'=>['update.faq'],'method'=>'put'])}}
				{{Form::textarea('faq',null,['class'=>'detail'])}}
				{{Form::hidden('id')}}
				<hr />{{Form::submit('Save FAQ' , ['class'=>'tiny button radius'])}}
			{{Form::close()}}
	@stop