<?php
require_once "abstract.php";

	class row extends Abstract_json
	{
		protected $data=array();
		protected $columns=array();
		
		function __construct()
		{
			$this->columns=array('id','name','age','gender');
		}
		
	}
