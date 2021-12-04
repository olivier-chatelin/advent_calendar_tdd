<?php

namespace App;

class Exercise
{
    public function part1(array $data): string
    {
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
    public function part2(array $data): string
    {
        $newData = [];
        foreach ($data as $digit) {
            $newData[] = str_split($digit);
        }
        $oxygenRate = implode('',$this->findRate($newData));
        $Co2Rate = implode('',$this->findRate($newData,'CO2'));

        return (int)bindec($oxygenRate) * (int)bindec($Co2Rate);
    }
    public function findRate(array $data, $kind = 'O2'): array
    {
        $rate = [];
        $binaryLength = count($data[0]);
        for($i = 0; $i < $binaryLength; $i++) {
            $total = 0;
            foreach ($data as $dataLine) {
                $total += $dataLine[$i];
            }
            $valueToDelete = ($total >= count($data) / 2)? '0':'1';
            if($kind === "CO2") {
                $valueToDelete = ($valueToDelete === '1')?'0':'1';
            }
            foreach ($data as $index => $dataLine) {
                if($dataLine[$i] === $valueToDelete) {
                    unset($data[$index]);
                }
                if(count($data) === 1) {
                    $rate = $data;
                }
            }
        }
        return  $rate[array_key_first($rate)];
    }
}