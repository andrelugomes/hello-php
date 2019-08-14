<?php
//https://www.php.net/manual/en/language.oop5.magic.php


class Base {

	function __construct() {
        print "In BaseClass constructor\n";
    }

	// Declare a protected method
    protected function baseMethod() { 
    	echo "base \n";
    }

}

class MyClass extends Base {

    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function __construct() {
        parent::__construct(); // like Java Super();
        print "In SubClass constructor\n";
    }

    // This is public
    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }

    // Declare a public method
    public function base() {

    	$this->baseMethod(); // $this is necessary
     }

    // Declare a protected method
    protected function MyProtected() { }

    // Declare a private method
    private function MyPrivate() { }

    public function __toString()
    {
        return "__toString : $this->public \n";
    }
}

$obj = new MyClass();
echo "$obj \n";

echo $obj->public; // Works
//echo $obj->protected; // Fatal Error
//echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private

$obj->base(); // Works
//$obj->MyProtected(); // Fatal Error
//$obj->MyPrivate(); // Fatal Error
