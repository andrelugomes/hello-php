<?php

namespace Core;

class CoreUnit
{
    private $arg1;
    private $arg2;

    function __construct() {
        $this->arg1 = "teste";
        $this->arg2 = 10000;
    }

    /**
     * @return string
     */
    public function getArg1(): string
    {
        return $this->arg1;
    }

    /**
     * @return int
     */
    public function getArg2(): int
    {
        return $this->arg2;
    }
}
