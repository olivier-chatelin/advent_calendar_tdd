<?php
require_once __DIR__ . '/../vendor/autoload.php';

$exercise = new \App\exercise\Day2();
$data = (new \App\d2\Data2())->toArray();

var_dump($exercise->d2p1($data));

