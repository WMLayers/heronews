<?php
class controller{
	public function loadV($V, $d = array()){
		extract($d);
		require 'views/'.$V.'.php';
	}
	public function loadT($V, $d = array()){
		extract($d);
		require 'views/template.php';
	}
	public function loadVinT($V, $d = array()){
		extract($d);
		require 'views/'.$V.'.php';
	}

}