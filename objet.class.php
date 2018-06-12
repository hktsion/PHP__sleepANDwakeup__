<?php

class Objeto {

	private $prop1;
	private $prop2;


	public function getProp1(){
		echo  $this->prop1;
	}

	public function getProp2(){
		echo  $this->prop2;
	}

	public function __construct($p1, $p2){
		$this->prop1 = $p1;
		$this->prop2 = $p2;
	}

	public function __sleep() {
		return $this->saveAndExit();
		
	}
	public function __wakeup() {
		$this->openAndStart();
	}


	public function saveAndExit() {
		return array_keys(get_object_vars($this));
	}

	public function openAndStart() {
		return $this;
	}
}

?>