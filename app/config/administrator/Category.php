<?php

	return [

		'title' => 'Albums',
		'single'=>'Album',
		'model'	=> 'Category',

		'columns' => [
			'name' => ['title'=>'Album Name','type'=>'text','text'=>'(:table)'],
			'thumbnail' =>['title'=>'Cover Image','output'=>'<img src="' .url() .'/uploads/thumbs/small/(:value)")>']
			
		],

		'edit_fields' =>[
			'name'=>['title'=>'Album Name','type'=>'text','text'=>"(:table).name"],
			'thumbnail' => array(
    'title' => 'Image',
    'type' => 'image',
    'location' => public_path() . '/uploads/',
    'naming' => 'random',
    'length' => 20,
    'size_limit' => 2,
    'mimes' => 'jpg,gif,png,jpeg',
    'sizes' => array(
        array(160, 160, 'fit', public_path() . '/uploads/thumbs/small/', 100)
    )
)
		],

	];


