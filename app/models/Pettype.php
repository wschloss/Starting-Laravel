<?php

class Pettype extends Eloquent {
	
	public $timestamps = false;	

	public function pets() {
		return $this->hasMany('Pet');
	}

}

?>