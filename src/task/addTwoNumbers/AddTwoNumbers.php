<?php


namespace app\task\addTwoNumbers;

use app\task\Task;

class AddTwoNumbers implements Task
{
    private $num;

    /**
     * @param Integer $num
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    private function addDigits($num)
    {
        $num = (string)$num;
        $arr = str_split($num);
        $summ = (string)array_sum($arr);
        if (strlen($summ) > 1) {
            return $this->addDigits($summ);
        } else
            return intval($summ);
    }

    public function decision()
    {
        return $this->addDigits($this->num);
    }
}