<?php
require_once "classes/Person.php";

$me=new Person("Jed");
printf("%s\n%s:bakit?\n",$me->getName(),$me->getName());
echo "Hello ".$me->getName()."\n";
//echo $me->_name;


?>
