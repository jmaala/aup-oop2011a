<?php
require_once "interfaces/Human.php";

	abstract class Person implements Human
	{

		protected $_name;
		public $health = 100;
		public $max_health = 100;
		public function getName()
		{
			return $this->_name;
		}
		public function isalive()
		{
			if($this->health > 0)
			{
				return True;
			}
			else
			{
				return False;
			}
		}
		public function eat($food)
		{
			$this->health = $this->health + $food;
			if($this->health >= $max_health)
				$this->health = $max_health;
			if($this->health <= 0)
				$this->health=0;
		}
		
		public function move()
		{
		}

	}
