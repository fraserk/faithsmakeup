<?php

	return [

		'title' => 'Portfolio',
		'single'=>'Portfolio',
		'model'	=> 'Portfolio',

		'columns' => [
			'image_path' => ['title'=>'image','type'=>'image','text'=>'(:table)'],
			'note' =>['title'=>'Photo Credit','type'=>'text','text'=>'(:table)'],
			'category_id' =>['title'=>'Photo Albun','type'=>'text','relationship'=>'category','select'=>"(:table).name"]
			
		],

		'edit_fields' =>[
			'category' => ['title'=>'Album','type'=>'relationship','name_field' => 'name'],
			'note'=>['title'=>'Credit','type'=>'markdown','text'=>"(:table)note"],

	

		],

	];


