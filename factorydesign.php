<?php
class Factory
{
	public static function get User()
	{
		$user=new User();
		return $user;
	}
}

class Factory1
{
	public static function create($object)
	{
		//always return new instance
	}
	public static function get($object)
	{
		//return instance, creating it if it doesn't exist
		static $objects;
		if(is_null($objects))
			$objects=array();
		if(!isset($object[$object]))
		{
			$objects[$object]=new $object;
		}
		return $objects[$object];
	}
}
	
