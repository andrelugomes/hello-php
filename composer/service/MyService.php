<?php

namespace Service;

use Monolog\Logger;
use Core\CoreUnit;

class MyService
{
    /**
     * @var Logger
     */
    private $log;

    public function __construct()
    {
        $this->log = new Logger('logger');
    }

    public function get() : string
    {
        $this->log->info("GET Method");

        $core = new CoreUnit();

        return $core->getArg1();
    }

}