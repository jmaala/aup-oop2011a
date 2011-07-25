<?php

class Person
{
	public $max_health=100;
	public $health=100;
	public $name='';
	public $food=0;
	function __construct($name)
	{
		$this->name=$name;
	}
	/*function eat(food):
	{
		self.health=self.health+food
		if (self.health>=max_health):
			self.health=max_health
		if (self.health<=0):
			self.health=0
	}*/
	public function is_alive()
	{
		if($this->health > 0)
		{
		    return True;
		}
		else
			return False;
	}
}

?>
