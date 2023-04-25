<?php

namespace appTest\task;

use app\task\palindromeNumber\PalindromeNumber;
use app\task\twoSum\TwoSum;

class PalindromeNumberTaskTest extends \PHPUnit\Framework\TestCase
{
    public function testDecision()
    {
        $num = 121;
        $t = new PalindromeNumber($num);
        $this->assertEquals($t->decision(), true);
        $num = 122;
        $t = new PalindromeNumber($num);
        $this->assertEquals($t->decision(), false);

    }

}