<?php

	class Category extends \Eloquent 
	{
		    public $timestamps = false;
		    protected $fillable = ['name','thumbnail'];
		public function portfolio(){
			return $this->hasMany('Portfolio');
		}
	}