<?php

namespace test;

echo __FILE__ . PHP_EOL;

function test()
{
    echo __FUNCTION__ . PHP_EOL;
}

const NAME = 'JackC';

class Student
{
    public function __construct()
    {
        echo __METHOD__ . PHP_EOL;
    }
}
