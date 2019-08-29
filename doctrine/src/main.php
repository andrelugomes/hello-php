<?php

use Collections\Collections;

require __DIR__ .'/../vendor/autoload.php';

$collections = new Collections();

$filter = $collections->filter([1,2,3,4,5]);

var_dump($filter);