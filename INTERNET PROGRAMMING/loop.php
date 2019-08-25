<?php

//DO WHILE

#EXAMPLE 1

$x = 0;
do 
{
echo "The number is: $x <br>";
$x++;
} 
while ($x <= 5);
echo "loop stopped at $x";



// //WHILE LOOP

#EXAMPLE 2
$x=0;
while ($x <= 10)
{
echo "The value is $x <br>";
$x++;
}
echo "loop stopped at $x";



#EXAMPLE 3

$i = 0;
$num = 50;
while( $i < 10) {
$num--;
$i++;
}
echo ("Loop stopped at i = $i and num = $num" );





// //FOR LOOP

#EXAMPLE 4

for ($i=0; $i <10 ; $i++) 
{ 
echo "this is fourth sem <br>";
}
echo "loop stopped at $i";

#EXAMPLE 5

$a = 0;
$b = 0;
for( $i = 0; $i<5; $i++ ) {
$a += 10;
$b += 5;
}
echo ("At the end of the loop a = $a and b = $b" );



//FOR EACH LOOP

#EXAMPLE 6

$array = array( 1, 2, 3, 4, 5);

foreach( $array as $value ) 
{
echo "Value is $value <br>";
}
         

#EXAMPLE 7

$array = array(
"name" => "Crish",
"sem" => "4th",
"sec"=>"C",
"address"=>"Bellingham Street",
"contact"=>"+12345678901"
);
//echo var_dump($array);
foreach ($array as $key) {
echo $key;
echo "<br>";
}


$array= array('id'=>'1',
'name'=>'xyz',
'email'=>'abc@gmail.com',
'contact'=>'223457654321');

foreach ($array as $key)
 {
	echo "$key <br>";
}

// Associative array

foreach ($array as $key => $value) 
{
	echo "$key is ".$value.'<br>';
	
}

?>