<?php

class person
{
	function person($name,$sec,$roll)
	{
		echo $name;
		echo "<br>";
		echo $sec;
		echo "<br>";
		echo $roll;
		echo "<br>";
	}
public function random1($name,$sec,$roll)
{
		echo $name;
		echo "<br>";
		echo $sec;
		echo "<br>";
		echo $roll;
		echo "<br>";
	}

	public function random2($name,$sec,$roll)
	{
		$this->printname=$name;
		$this->printsec=$sec;
		$this->printroll=$roll;
	}
}
echo "this is constructor <br>";
 $object= new person('ram','4th','01245678');
echo "this is function random1 <br>";

 $object->random1('hari','5th','01224148');
   echo "this is function random2 <br>";

 $object->random2('sita','4th','0189798598');
	echo $object->printname;
	echo "<br>";
	echo $object->printsec;
	echo "<br>";
	echo $object->printroll;
	echo "<br>";


  ?>
