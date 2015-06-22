<?php

class Quize extends \Eloquent {
	protected $fillable = [];

	public function points()
	{
		return $this->morphMany('Point', 'pointable');
	}

	public function subject()
	{
		return $this->belongsTo('Subject');
	}
}