<?php


	class Portfolio extends \Eloquent 

	{
		protected $fillable = ['image_path','thumb_path','note'];
		public function category(){
			return $this->belongsTo('Category','category_id');
		}
	}