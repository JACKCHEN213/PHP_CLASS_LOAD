<?php

namespace src;

use src\driver\Zip;
use src\driver\Rar;
use src\driver\SevenZ;

class Extractor
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
        new Zip();
        new Rar();
        new SevenZ();
    }
}
