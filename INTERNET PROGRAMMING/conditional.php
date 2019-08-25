<?php
//DECISION MAKING STATEMENTS in PHP

$a=2;
$b=5;
if ($a > $b) 					 //if
echo "a is bigger than b";
else echo"$b"." b is greater <br>";


$a=1;
$b=6.6;

if ($a > $b) 
{
echo "a is greater than b <br>";   // IF ELSE
} 
else 
{
	echo "a is NOT greater than b <br>";
}

$a=5;
$b=6;

if ($a > $b) {                           //NESTED IF ELSE
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b <br>";
}



if ($a > $b):                            //Alternatives ways
echo $a." is greater than ".$b;
elseif ($a == $b): 									// Note the combination of the words.
echo $a." equals ".$b;
else:
echo $a." is neither greater than or equal to ".$b;
endif;


//If else VS Switch

$i=1;
echo "<h1>this is if else output</h1> <br>";
if ($i == 0) {
echo "i equals 0 <br>";
} elseif ($i == 1 ) {  //IF
echo "i equals 1 <br>";
} elseif ($i == 2) {
echo "i equals 2 <br>";
}

echo "<h1>this is switch case output</h1> <br>";
switch ($i) {
case 0:
    echo "i equals 0";
    break;
case 1:
    echo "i equals 1";   //Case
    break;
case 2:
    echo "i equals 2";
    break;
}

#Switch Case

$beer="Arna";
switch($beer)
{
    case 'tuborg';
    case 'carlsberg';
    case 'heineken';
    case 'Arna';
        echo 'Good choice';
    break;
    default;
        echo 'Please make a new selection...';
    break;
}


$char="K";

switch ($char) 
{

case 'a':case 'A':case 'e':case 'E':case 'i':case 'I':case 'o':case 'O':case 'u':case 'U':
echo'Vowel';
break;

default:
echo "Consonant";
break;
}



?>