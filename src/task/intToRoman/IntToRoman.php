<?php

namespace app\task\intToRoman;

use app\task\Task;

class IntToRoman implements Task
{
    private $num;

    /**
     * @param $num integer
     */
    public function __construct($num)
    {
        $this->num = $num;

    }

    private function intToRoman($num)
    {
        $values = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
        $romans = ["M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"];
        $size = count($values);
        $output = "";
        for ($i = 0; $i < $size; $i++) {
            while ($num >= $values[$i]) {
                $num -= $values[$i];
                $output .= $romans[$i];
            }
        }
        return $output;

    }

    public function decision()
    {
        return $this->intToRoman($this->num);
    }
}