<?php
class rumah{
	public $jendela,$pintu,$tembok;
	public function __construct($jendela,$pintu,$tembok){
		$this->jendela=$jendela;
		$this->pintu=$pintu;
		$this->tembok=$tembok;
	}
	public function get_jendela(){
		return $this->jendela;
	}
	public function get_pintu(){
		return $this->pintu;
	}
	public function get_tembok(){
		return $this->tembok;
	}
	
}
?>