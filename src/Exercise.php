<?php

namespace App;

use SebastianBergmann\CodeCoverage\Report\PHP;

class Exercise
{
    public function part1(array $data): string
    {
        $randoms = explode(',',$data[0]);
        $grids =[];
        for ($i = 2; $i < count($data); $i += 6) {
            $grid = [];
            for($j = 0; $j < 5; $j++ ) {
                $grid[] = explode(' ',$data[$j + $i]);
            }
            $grids[] = $grid;

        }
        $gridResults = [];
        foreach ($randoms as $random) {
            foreach ($grids as $gridIndex => $gridRows) {
                foreach ($gridRows as $gridRowIndex => $gridColumns) {
                    foreach ($gridColumns as $gridColumnIndex => $gridColumn) {
                        if((int)$random === (int)$gridColumn) {
                            $gridResults[$gridIndex]["row"][] = $gridRowIndex;
                            $gridResults[$gridIndex]["col"][] = $gridColumnIndex;
                        }
                    }
                }
            }
            foreach ($gridResults as $gridIndex => $gridResult) {
                foreach(array_count_values( $gridResult['row']) as $row => $count) {
                    if ($count === 5) {
                        unset($grids[$gridIndex]);
                        unset($gridResults[$gridIndex]);
                        if (count( $gridResults) === 0) {
//                            print_r($grids);
//                            print_r($gridResults);

                            print_r($random);
                            var_dump($gridIndex);
                            die('stop');
                        }
                    }
                }
                foreach(array_count_values( $gridResult['col']) as $col => $count) {
                    if ($count === 5) {
                        unset($grids[$gridIndex]);
                        unset($gridResults[$gridIndex]);
                        if (count( $gridResults) === 0) {
                            print_r($random);
                            var_dump($gridIndex);
                            die('stop');
                        }
                    }
                }
            }
        }

    return '';
    }


//    public function part2(array $data): string
//    {
//        return "";
//    }
}