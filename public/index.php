<?php

require_once dirname(__DIR__) . '/autoloader.php';

$student = new \persons\Student('Fill', 3, 'Vladivostok');
$student->info();

$worker = new \persons\Worker('Andrew', '21', 'Zalupinsk');
$worker->info();