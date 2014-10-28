<?php

class Pet extends Eloquent {
	public $timestamps = false;
	
	protected $fillable = array('id', 'name', 'age', 'pettype_id');

	public function pettype() {
		return $this->belongsTo('Pettype');
	}

}

?>