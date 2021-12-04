<?php

namespace App;

use PHPUnit\Framework\TestCase;

class ExerciseTest extends TestCase
{
    public function testPart1()
    {
        $exercise = new Exercise();
        $this->assertEquals('0',$exercise->part1(['0','0','1']));
        $this->assertEquals('0',$exercise->part1(['01','10','11']));
        $this->assertEquals('6',$exercise->part1(['110','100','111']));
        $this->assertEquals('198',$exercise->part1(['00100','11110','10110','10111','10101','01111','00111','11100','10000','11001','00010','01010']));

    }
    public function testPart2()
    {
        $exercise = new Exercise();
        $this->assertEquals('230',$exercise->part2(['00100','11110','10110','10111','10101','01111','00111','11100','10000','11001','00010','01010']));
    }
}
