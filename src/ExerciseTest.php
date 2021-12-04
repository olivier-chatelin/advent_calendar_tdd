<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ExerciseTest extends TestCase
{
    public function testPart1()
    {
        $exercise = new Exercise();
        $this->assertEquals('',$exercise->part1([]));
    }
//    public function testPart2()
//    {
//        $exercise = new Exercise();
//        $this->assertEquals('',$exercise->part2([]));
//    }
}
