<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "ecom", "ecom", "khanstore");
		return $this->con;
	}
}

?>