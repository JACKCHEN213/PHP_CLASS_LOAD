<?php

use DB\Redis;
use DB\MySQL;
use DB\test\Test;

class Driver
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;

        new Redis();
        new MySQL();
        new Test();
    }
}
