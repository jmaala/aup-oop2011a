<?php
 class Singleton
 {
	public static function getInstance() 
	{
		static $instance;
		if(is_null($instance))
			$instance=new Singleton();
		return $instance;
	}
}
