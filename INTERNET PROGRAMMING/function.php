<?php

#Example 1

//user defined function 

// function hello()  
// {
// print("Hello!");
// echo"<br>";
// }
// hello();

// #Example 2

#Functions with arguements

function printname($name)
{
echo"Name is $name.<br>";
}

function printnames($name1,$name2)
{
echo"Names are $name1 and $name2.<br>";
}

//single arguement function call

printname('ram');
printname('rama');
printname('santosh');

//multiple arguements function call
printnames('sita','gita');
printnames('hari','rita');

#Example 3

#return type functions

function sum($x,$y)
{
return($x+$y);
}

echo"Sum is "." ".sum(5,6);


// function printarray($array)
// {
// 	foreach ($array as $val) 
// 	{
// 	 echo'$val<br>';
// 	}
// 	foreach ($array as $key => $value) 
// 	{
// 		echo"$key is $value";
// 	}
// }

// $array= array(
// 'country'=>'USA',
// 'State'=>'Washington',
// 'Street'=>'Bellingham',
// 'House NO'=>'234');

// printarray($array);

// #Example 4

// function add10($num) 
// {
// $num += 10;
// }

// function add20(&$num) 
// {
// $num += 20;
// }

// $orignum = 10;
// add10( $orignum );

// echo "Original Value is $orignum<br/>";

// add20( $orignum );
// echo "Original Value is $orignum<br/>";


// #Example 5
// function printMe($param = NULL) 
// {
// print $param;
// }

// printMe("This is test");
// printMe();

?>



