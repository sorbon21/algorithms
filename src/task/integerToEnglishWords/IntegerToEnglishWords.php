<?php

namespace app\task\integerToEnglishWords;

use app\task\Task;

class IntegerToEnglishWords implements Task
{
    private $num;

    /**
     * @param $num integer
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    public function numberToWords($num)
    {
        $values = [4, 3, 2, 1];
        $words = ["four", "three", "two", "one"];
        $size = count($values);
        $output = "";
        for ($i = 0; $i < $size; $i++) {
            while ($num >= $values[$i]) {
                $num -= $values[$i];
                $output .= $words[$i];
            }
        }

        return $output;
    }

    public function decision()
    {
        return $this->numberToWords($this->num);
        // TODO: Implement decision() method.
    }
}