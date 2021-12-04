<?php

namespace App;

class Exercise
{
    public function part1(array $data): string
    {
        $count = 0;
        for ($i = 0; $i < count($data) -1; $i ++) {
            if($data[$i] < $data[$i+1]) {
                $count ++;
            }
        }
        return $count;
    }
//    public function part2(array $data): string
//    {
//        return "";
//    }
}