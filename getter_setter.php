<?php

class Person
{
	protected $_firstname;
	protected $_lastname;
	protected $_data=array();
	
	public function setFirstname($firstname)
	{
		if(Validate::is_valid($firstname))
		{
			$this->_fistname=$firstname;
		}
	}
	
	public function getFirstname()
	{
		return $this->_firstname;
	}
	
	public function __set($key,$value)
	{
		$this->_data[$key]=$value;
	}

}			
