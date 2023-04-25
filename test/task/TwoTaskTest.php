<?php

namespace appTest\Task;

use app\task\twoSum\TwoSum;

class TwoTaskTest extends \PHPUnit\Framework\TestCase
{
    public function testTwoSum()
    {
        $nums = [1, 2, 8, -2, 4];
        $t = new TwoSum($nums, 6);
        $this->assertEquals($t->decision(), [2, 3]);


    }

}