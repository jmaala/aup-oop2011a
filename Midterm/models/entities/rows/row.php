<?php
require_once "abstract.php";

	class row extends abstracted
	{
		protected $data=array();
		protected $columns=array();
		
		function __construct()
		{
			$this->columns=array('name','age','gender');
		}
		
	}
