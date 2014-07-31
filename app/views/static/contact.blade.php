@extends('layouts.template')
	@section('content')
		<h2>Contact Me </h2>
			<div class="row">
				<div class="large-6 columns large-centered">
					  @if ($errors->any())
       
            {{ implode('', $errors->all('<div data-alert class="alert-box warning">:message</div>')) }}
        
    		@endif

    		@if(Session::has('message'))
							<div class="alert alert-success">{{session::get('message')}}</div>
							@endif
			{{Form::open(['route'=>'sendcontact'])}}
				{{Form::label('name','Your Name:')}}
				{{Form::text('name')}}

				{{Form::label('email','Your Email Address:')}}
				{{Form::text('email')}}

				{{Form::label('subject','Subject:')}}
				{{Form::text('subject')}}

				{{Form::label('detail','Message:')}}
				{{Form::textarea('detail')}}

				{{Form::submit('Send Message',['class'=>'button radius'])}}

			{{Form::close()}}
				</div>
			



	
    </div>
	@stop