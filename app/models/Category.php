<?php

	class Category extends \Eloquent 
	{
		    public $timestamps = false;

		public function portfolio(){
			return $this->hasMany('Portfolio');
		}
	}