<?php 
//https://www.php.net/manual/en/language.types.array.php
//An array in PHP is actually an ordered map. A map is a type that associates values to keys.

//PHP arrays are in fact implemented as ordered hashtables.

$array_old_way = array('André', "Luis", "Gomes", 30);

print_r($array_old_way); //print arrays


$array_new_way = ['André', "Luis", "Gomes", 30]; 

print_r($array_new_way);


var_dump($array_new_way[0]);


$associative_array = ["name" => 'André', "last_name" => 'Gomes'];

print_r($associative_array);

var_dump($associative_array['name']);


$mixing_array = ["name" => 'André', 'Gomes', 34];

var_dump($mixing_array);

//Operators

$a = array("a" => "apple", "b" => "banana");
$b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

$c = $a + $b; // Union of $a and $b
echo "Union of \$a and \$b: \n";
var_dump($c);

$c = $b + $a; // Union of $b and $a
echo "Union of \$b and \$a: \n";
var_dump($c);

$a += $b; // Union of $a += $b is $a and $b
echo "Union of \$a += \$b: \n";
var_dump($a);

//For
$array = ['One', 'Two', 'Three'];
$array_length = count($array);
 
for ($i = 0; $i < $array_length; ++$i) {
  echo $array[$i];
  echo "\n";
}

//For Each
foreach ($b as $item) {
	echo "item = $item \n";
}

//For Each as Map
foreach ($a as $key => $value) {
	echo "key = $key  AND value = $value \n";
}

?>