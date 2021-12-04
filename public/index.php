<?php
require_once __DIR__ . '/../vendor/autoload.php';

$exercise = new \App\Exercise();
$data = (new \App\Data())->toArray();
var_dump($exercise->part1($data));
//var_dump($exercise->part2($data));

