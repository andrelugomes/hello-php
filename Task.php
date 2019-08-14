<?php

class Task {

	var $description; //PHP4
	public $completed = false; //new Way

	public function __construct($description)
	{

		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}
}

$task = new Task("Learning", "PHP");

var_dump($task->description);

var_dump($task);

$task->complete();

var_dump($task);