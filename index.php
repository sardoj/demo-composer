#!/usr/bin/env php
<?php

require __DIR__.'/vendor/autoload.php';

if (empty($argv[1])) {
    die("You have give a parameter\n");
}

$className = "\\Sardoj\\DemoComposer\\Console\\".$argv[1];

new $className;

echo "\n";
