
       		@if(Request::segment(3) =='album')
       			{{Form::label('name','Album Name')}}
       		{{Form::text('name')}}
       		@endif
       		

       		{{Form::label('image','Upload image' )}}
       		{{Form::file('image')}}
       		{{Form::submit('sbumit',['class'=>'button radius  tiny'])}} 