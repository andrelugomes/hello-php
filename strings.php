<?php $a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"

$a = "Hello ";
$a .= "World!";     // now $a contains "Hello World!"


$name = "André Luis";
$last_name = 'Gomes'; //plain text

var_dump($name);

printf($last_name);

echo "interpolation $name $last_name \n"; //interpolation
echo 'contatenation ' . $name . $last_name; //contatenation


//Operators

$a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"
var_dump($b);
$a = "Hello ";
$a .= "World!";     // now $a contains "Hello World!"

var_dump($a);
?>