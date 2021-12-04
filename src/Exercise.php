<?php

namespace App;

class Exercise
{
    public function part1(array $data): string
    {
        $horizontal = 0;
        $depth = 0;
        foreach ($data as $instruction) {
            $instructionCouple = explode(' ',$instruction);
            switch ($instructionCouple[0]) {
                case "forward":
                    $horizontal += (int)$instructionCouple[1];
                    break;
                case "up":
                    $depth -= (int)$instructionCouple[1];
                    break;
                case "down":
                    $depth += (int)$instructionCouple[1];
                    break;
            }
        }
        return $depth * $horizontal;
    }
    public function part2(array $data): string
    {
        $horizontal = 0;
        $depth = 0;
        $aim = 0;
        foreach ($data as $instruction) {
            $instructionCouple = explode(' ',$instruction);
            switch ($instructionCouple[0]) {
                case "forward":
                    $horizontal += (int)$instructionCouple[1];
                    $depth += $aim * (int)$instructionCouple[1];
                    break;
                case "up":
                    $aim -= (int)$instructionCouple[1];
                    break;
                case "down":
                    $aim += (int)$instructionCouple[1];
                    break;
            }
        }
        return $depth * $horizontal;
    }
}