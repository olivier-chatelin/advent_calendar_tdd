<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ExerciseTest extends TestCase
{
    public function testPart1()
    {
        $exercise = new Exercise();
        $this->assertEquals('7',$exercise->part1(['199','200','208','210','200','207','240','269','260','263']));

    }
//    public function testPart2()
//    {
//        $exercise = new Exercise();
//        $this->assertEquals('',$exercise->part2([]));
//    }
}
