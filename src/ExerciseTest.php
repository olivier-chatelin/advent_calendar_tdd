<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ExerciseTest extends TestCase
{
    public function testPart1()
    {
        $exercise = new Exercise();
        $this->assertEquals('150',$exercise->part1(['forward 5','down 5','forward 8','up 3','down 8','forward 2']));
    }
    public function testPart2()
    {
        $exercise = new Exercise();
        $this->assertEquals('900',$exercise->part2(['forward 5','down 5','forward 8','up 3','down 8','forward 2']));

    }
}
