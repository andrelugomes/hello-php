<?php

if ( 10 == "10") {
	echo "Equals (10 == \"10\")" . "\n";
}

if ( 10 === "10") {
	echo "Equals" . "\n";
} else {
	echo "Not identicals. Diferent types (10 === \"10\")" . "\n";
}

//Arrays
/**
$a == $b	Equality	TRUE if $a and $b have the same key/value pairs.
$a === $b	Identity	TRUE if $a and $b have the same key/value pairs in the same order and of the same types.
**/

$a = array("apple", "banana");
$b = array(1 => "banana", "0" => "apple");
$c = array(1 => "banana", 2 => "perl");


var_dump($a <> $c); // bool(true)
var_dump($b != $c); // bool(true)
var_dump($a == $b); // bool(true)
var_dump($a === $b); // bool(false)
var_dump($a !== $b); // bool(true)

//Types

class MyClass
{
}

class NotMyClass
{
}

$a = new MyClass;

var_dump($a instanceof MyClass); //bool(true)
var_dump($a instanceof NotMyClass); //bool(false)

//Strings

$a = "Hello ";
$b = $a . "World!"; // now $b contains "Hello World!"
var_dump($b);
$a = "Hello ";
$a .= "World!";     // now $a contains "Hello World!"

var_dump($a);
