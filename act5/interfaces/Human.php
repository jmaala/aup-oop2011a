<?php
	#1. Create an interface for human
	#2. abstract person class should implement Human
	#3.	Ninja and Warrior extends Person should implement fighter interface
	#4. Make ninja vs warrior fight as as in act4
	#5. Always commit for any significant change you did
	#6. When finished, tag it on git as "Activity5"
	#7. push	
	interface Human
	{
		public function getName();
		public function is_alive();
		public function eat($food);
		public function move();
	}
