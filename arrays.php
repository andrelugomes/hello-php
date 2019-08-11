<?php 

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


 ?>