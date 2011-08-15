<?php
require_once "json.php";

	class row extends Json
	{
		protected $data=array();
		protected $columns=array();
		
		function __construct()
		{
			$this->columns=array('name','age','gender');
		}
		
		
		function __get($variable)
		{
			return $this->{$variable};
		}
		
	}
