<?php


use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Blog extends Eloquent implements SluggableInterface
{

    use SluggableTrait;
    public $fillable = ['title','body','publish','slug'];

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

}