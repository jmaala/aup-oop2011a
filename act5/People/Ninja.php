<?php
require_once "Person.php";
require_once "interfaces/Fighter.php";

class Ninja extends Person implements fighter
{
	public $damage=15;
	function __construct($name)
	{
		$this->name=$name;
	}
	public function attack($target)
	{
		$attack=0;
		$x=0;
		$x=rand(1, 3);
		if($x==1)
		{
			$attack=$this->damage;
			$target->health=$target->health-$attack;
		}
		if($x==2)
		{
			echo "Miss!\n";
		}
		if($x==3)
		{
			$attack=$this->damage*1.1;
			$target->health=$target->health-$attack;
			echo "Critical!\n";
		}
		if($target->health<=0)
			$target->health=0;
		printf("%s attacks %s damage: %d\n%s's Health:%d\n", $this->name, $target->name, $attack, $target->name, $target->health);
	}
	public function defence($target)
		{

		}
		public function spell($target)
		{

		}
}
