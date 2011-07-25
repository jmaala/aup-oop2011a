<?php

class Math
{
	public static function add($a,$b)
	{
		return $a+$b;
	}
	public static function subtract($a,$b)
	{
		return $a-$b;
	}
}

echo Math::add(5,2)."\n";

$m=new Math();

echo $m->add(5,9)."\n";
