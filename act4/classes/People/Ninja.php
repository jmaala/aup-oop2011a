<?php
require_once "Person.php";

class Ninja extends Person
{
	public $damage=15;
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
		printf("%s attacks %s damage: %d\n%s's Health:%d\n", $this->name, $target->name, $attack, $target->name, $target->health);
	}
}
?>
