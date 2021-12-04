<?php

namespace App;

class Exercise
{
    public function part1(array $data): string
    {
        $total = [];
        $gamma = [];
        $epsilon = [];
        $newData = [];
        $binaryLength = strlen($data[0]);
        foreach ($data as $digit) {
            $newData[] = str_split($digit);
        }
        for($i = 0; $i < $binaryLength; $i++) {
            $total = 0;
            foreach ($newData as $dataLine) {
                $total += $dataLine[$i];
            }
                if($total >= count($newData) / 2) {
                    $gamma[] = 1;
                    $epsilon[] = 0;
                } else{
                    $gamma[] = 0;
                    $epsilon[] = 1;

                }
        }

        return (int)bindec(implode('',$gamma)) * (int)bindec(implode('',$epsilon));
    }
//    public function part2(array $data): string
//    {
//        return "";
//    }
}