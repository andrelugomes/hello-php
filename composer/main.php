<?php
require 'vendor/autoload.php'; //required
//require __DIR__ .'/../vendor/autoload.php';

use Service\MyService;

$service = new MyService();

echo $service->get();

