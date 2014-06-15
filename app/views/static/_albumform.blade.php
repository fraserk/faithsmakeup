
       		{{Form::label('name','Album Name')}}
       		{{Form::text('name')}}
       		{{Form::label('image','Upload Album Cover' )}}
       		{{Form::file('image')}}
       		{{Form::submit('sbumit',['class'=>'button radius  tiny'])}} {{link_to_route('create.album','Cancel',null,['class'=>'button radius tiny Secondary'])}}