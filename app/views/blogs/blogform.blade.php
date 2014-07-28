		{{Form::label('title','Blog Title')}}
		{{Form::text('title')}}

		{{Form::textarea('body',null,['class'=>'detail'])}}

		{{Form::label('publish','Publish Post?')}}
		{{Form::checkbox('publish',true, true)}}