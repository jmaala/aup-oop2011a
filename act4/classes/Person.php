<?php
class Person
{
	protected $_name;
	var $health;
	
	public function __construct($name)
	{
		$this->_name=$name;
	}
	
	public function getName()
	{
		return $this->_name;
	}
}

?>
