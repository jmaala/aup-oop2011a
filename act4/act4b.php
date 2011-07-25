<?php
require_once "classes/People/Person.php";
require_once "classes/People/Warrior.php";
require_once "classes/People/Ninja.php";

$naruto=new Warrior('naruto');
$sasuke=new Ninja('sasuke');

while($naruto->is_alive()!=False and $sasuke->is_alive()!=False)
{
    $sasuke->attack($naruto);
	echo "\n\n";
    if($naruto->is_alive()==True)
    {
        $naruto->attack($sasuke);
        echo "\n\n";
    }
}
if($naruto->is_alive()==True and $sasuke->is_alive()==False)
    echo $naruto->name." wins!\n";
else
    echo $sasuke->name." wins!\n";
?>
