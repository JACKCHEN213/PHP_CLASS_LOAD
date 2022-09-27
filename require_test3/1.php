<?php

use test\Student;

use function test\test;

use const test\NAME;

function load($class)
{
    require_once "2.php";
}

spl_autoload_register('load');

test();
new Student();
var_dump(NAME);
