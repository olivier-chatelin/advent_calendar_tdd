<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ExerciseTest extends TestCase
{
    public function testPart1()
    {
        $exercise = new Exercise();
        $this->assertEquals([], $exercise->getMarkedCoordinates([24], [[13]]));
        $this->assertEquals([0 => [24 => [0, 0]]], $exercise->getMarkedCoordinates([24], [[24]]));
        $this->assertEquals([], $exercise->getMarkedCoordinates([25, 13], [[24]]));
        $this->assertEquals([0 => [24 => [0, 0]]], $exercise->getMarkedCoordinates( [24, 13], [[24]]));
        $this->assertEquals([
            0 => [
                24 => [0, 0]
            ]
        ],$exercise->getMarkedCoordinates([24, 13], [0=>[24], [25]]));
        $this->assertEquals([
            0 => [
                24 => [0, 0]
            ],
            1 => [
               13 =>[0, 0]
            ],
            2 => [
                24 => [0, 0]
            ],
        ],$exercise->getMarkedCoordinates([24,13],[[24],[13],[24]]));
        $this->assertEquals([
            0 => [
                24 => [0, 0]
            ],
            1 => [
               13 =>[0, 0]
            ],
            2 => [
                24 => [0, 0]
            ],
        ],$exercise->getMarkedCoordinates([24,13],[[24],[13],[24]]));
    }
//    public function testPart2()
//    {
//        $exercise = new Exercise();
//        $this->assertEquals('',$exercise->part2([]));
//    }
}
