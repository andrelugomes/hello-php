<?php

define('CONSTANTE', 1024); // case_insensitive
define('CONSTANTE', 1024, false); // case_insensitive

//define('CONSTANTE', 1024, true); // case_sensitive


echo CONSTANTE . "\n";
//echo Constante . "\n"; //PHP Warning:  Use of undefined constant Constante - assumed 'Constante'

class Constants {
	const MAX_NUMBER = 100;

	public $bla = 101;

	public function pre() 
	{
		echo "__CLASS__" . __CLASS__ . "\n";
		echo "__METHOD__" . __METHOD__ . "\n";
	}
}

class MyClass
{
    // Declare a public constant
    public const MY_PUBLIC = 'public';

    // Declare a protected constant
    protected const MY_PROTECTED = 'protected';

    // Declare a private constant
    private const MY_PRIVATE = 'private';

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}


$constant = new Constants();

echo $constant->bla  . "\n";

echo Constants::MAX_NUMBER  . "\n";

//http://docs.php.net/manual/en/language.constants.predefined.php


echo Constants::class . "\n";

echo $constant->pre();