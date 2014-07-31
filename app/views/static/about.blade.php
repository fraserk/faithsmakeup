@extends('layouts.template')
	@section('content')
		<h2 class="subheader"> About Me</h2>
            <p>{{$data->about_me}}</p>

			<div class="row">
        <div class="large-12 columns text-left">
        <img src="img/profile.JPG"  height="100px" width="106px" align="">
        <img src="img/profile2.JPG" height="100px" width="100px" align="">
        <img src="img/profile3.JPG" height="100px" width="100px" align="">
        <img src="img/profile4.JPG" height="100px" width="100px" align="">
        </div>
    </div>
    
	@stop