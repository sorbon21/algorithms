<?php

namespace app\task\twoSum;

use app\task\Task;

class TwoSum implements Task
{
    private $nums;
    private $target;

    /**
     * @param Integer[] $nums
     * @param Integer $target
     */
    public function __construct(array $nums, $target)
    {
        $this->nums = $nums;
        $this->target = $target;
    }

    private function twoSum($nums, $target)
    {
        $flipped = [];
        foreach ($nums as $key => $value) {
            $find = $target - $value;
            if (isset($flipped[$find])) {
                return [$flipped[$find], $key];
            }
            $flipped[$value] = $key;
        }
        return [];
    }

    public function decision()
    {
        return $this->twoSum($this->nums, $this->target);
    }
}