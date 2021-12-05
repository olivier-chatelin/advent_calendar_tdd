<?php

namespace App;

use function PHPUnit\Framework\isEmpty;

class Exercise
{
    public function filterData(array $data): string
    {
        //dataCleaning
        $newData = [];
        $newLine = [];
        foreach ($data as $dataLine) {
            $newData[] = explode(' -> ', $dataLine);
        }
        foreach ($newData as &$dataLines) {
            foreach ($dataLines as &$coordinate) {
                $coordinate = explode(',', $coordinate);
            }
        }
        $this->part1($newData);
        print_r($newData);
        die();
        return "";
    }
    public function part1(array $data): string
    {
        $map = [];
        foreach ($data as $vents) {
                $row0 = $vents[0][0];
                $col0 = $vents[0][1];
                $row1 = $vents[1][0];
                $col1 = $vents[1][1];


                if($row0 === $row1) {
                    $start = $col0;
                    $end = $col1;
                    if($start > $end) {
                        $start = $col1;
                        $end = $col0;
                    }
                    for($i = $start; $i <= $end; $i++) {
                        if(isset($map[$row0][$i])) {
                            $map[$row0][$i]++;
                        } else{
                            $map[$row0][$i] = 1;
                        }

                    }
                }
                if($col0 === $col1) {
                    $start = $row0;
                    $end = $row1;
                    if($start > $end) {
                        $start = $row1;
                        $end = $row0;
                    }
                    for($i = $start; $i <= $end; $i++) {
                        if(isset($map[$i][$col0])) {
                            $map[$i][$col0]++;
                        } else{
                            $map[$i][$col0] = 1;
                        }

                    }
                }
                //diagonal
                if(abs($row1 - $row0) === abs($col1 - $col0)) {
                    $coeffCol = (($col1 - $col0))> 0 ? 1:-1;
                    $coeffRow = (($row1 - $row0))> 0 ? 1:-1;
                    for($i = 0; $i <= abs($row1 - $row0); $i++) {
                        if(isset($map[$row0 + $coeffRow*$i][$col0 + $coeffCol*$i])) {
                            $map[$row0 + $coeffRow*$i][$col0 + $coeffCol*$i]++;
                        } else{
                            $map[$row0 + $coeffRow*$i][$col0 + $coeffCol*$i] = 1;
                        }
                    }
                }

        }
        $count = 0;
        foreach ($map as $rows) {
            foreach ($rows as $overlap) {
                if ($overlap >= 2) {
                    $count++;
                }
            }
        }
        var_dump($count);die();
        return "";
    }
}